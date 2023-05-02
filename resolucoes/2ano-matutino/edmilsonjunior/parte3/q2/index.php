<?php
    $num = $_GET["num"] ?? 0;
?>


<!DOCTYPE>
<html lang="pt-br">
    <head>
        <title>Questão 2</title>
        <meta charset="utf=-8"> <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>     <div class="container">
		<div class="box formulario">
        <form action="q2.php" method="get">
        <label>Informe o numero:
                <input type="number" name="num">
            </label>
            <br>
            <button>Enviar</button>
            </form></div>
        </div>
        <?php
          
            $i = 1;
            while($i <= 10){
                $tabuada = $num * $i;
                echo "<h3 class='alerta-verde'>{$num} x {$i} = {$tabuada}</h3>";
                $i++;
            }
        
        ?>
    </body>

</html>