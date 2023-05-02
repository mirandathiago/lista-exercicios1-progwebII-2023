<?php
    $numero = $_POST["numero"];

    if($numero == 0){
            $fat = 1;
        }else{
            for($fat = $numero; $fat > 1; $fat++){
            $fat = $numero * ($numero - 1) * ($numero - 2) * ($numero-3);
        }
        
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Fatorial</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Cálculo de Fatorial</h2>
            <form action="index.php" method="post">
                <label>Número:
                    <input type="number" id="numero" name="numero" required>
                </label>

                
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <?php
                echo "<h2>O fatorial do número {$numero} é {$fat}</h2>";
            ?>
        </div>
    </div>
</body>
</html>

