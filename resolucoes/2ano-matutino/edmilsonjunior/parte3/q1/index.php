<?php
    $numero = $_GET["numero"] ?? " ";
    $resultado = 1;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 1</title> <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body><div class="container">
		<div class="box formulario">
        <form action="q1.php" method="get">
        <label>Informe o numero:
            <input type="number" name="numero">
            </label>
            <br>
        <button>Enviar</button>
            </form></div>
        </div>
        <?php
        if($numero == 0){
            echo "<h3 class='alerta-verde'>O fatorial desse numero 1</h3>";
        }
        for($i = 1;$i<=$numero;$i++){
            $resultado = $resultado*$i;
        }
        echo "<h3 class='alerta-verde'>O fatorial de {$numero} é {$resultado}</h3>";
        ?>
    </body>
</html>