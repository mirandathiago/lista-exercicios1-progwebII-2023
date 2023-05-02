<?php
    
    $numero = $_POST["numero"] ?? 0;
    $cont = 1;
    while ($cont <= 4){
            $numero * $cont = $resultado;
            $cont++;
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
        <h1>Tabuada</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Tabuada da Multiplicação</h2>
            <form action="index.php" method="post">
                <label>Número:
                    <input type="number" id="numero" name="numero" required>
                </label>

                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
        <?php
        $metodo = $_SERVER["REQUEST_METHOD"];
        if($metodo == "POST"){
            
            echo "<h2>Tabuada do número {$numero} : {$resultado}</h2>";
            
        }
        ?>
        </div>
    </div>
</body>
</html>
