<?php 
    $numero = $_GET["numero"];

    $dobro = $numero * 2 ;
    $metade = $numero / 2; 

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
        <h1>Formulário de Contagem</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Formulário de Contagem</h2>
            <form action="index.php" method="get">
                <label>Número:
                    <input type="number" id="numero" name="numero" required>
                </label>

                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            
            <h2>Resposta</h2>
            <?php
                echo "</p>O dobro do número {$numero} é {$dobro} e a metade é {$metade}</p>";
            ?>
        </div>
    </div>
</body>
</html>
