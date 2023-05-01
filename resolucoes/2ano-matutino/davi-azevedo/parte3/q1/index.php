<?php
    $numero = $_GET["numero"] ?? " ";
    $resultado = 1;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <link rel="stylesheet" type="text/css" href="q1.css">
        <meta charset="utf-8">
        <title>Questão 4</title>
    </head>
    <body>
        <h1>Descobrindo Fatoriais</h1>
        <form action="index.php" method="get">
        <label>Informe o numero:
            <input type="number" name="numero">
            </label>
            <br>
        <button>Enviar</button>
        </form>
        <?php
        if($numero == 0){
            echo "O fatorial desse numero 1";
        }
        for($i = 1;$i<=$numero;$i++){
            $resultado = $resultado*$i;
        }
        echo "O fatorial de {$numero} é {$resultado}";
        ?>
    </body>
</html>