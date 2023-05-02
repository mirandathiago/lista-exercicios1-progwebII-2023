<?php
    $n = $_GET["num"] ?? 0;
?>
<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 4</title>
          <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>  <div class="container">
		<div class="box formulario">
        <form action="q4.php" method="get">
            <label>Informe o numero:
                <input type="number" name="num">
            </label><br>
            <button>Enviar</button>
            </form></div>
        </div>
        <?php
        $r = 0;
            for($i = 0;$i<=$n;$i++){
             $r += $i;   
            }
        echo "<h3 class='alerta-verde'>Soma dos numeros de 1 a {$n} = {$r}</h3>";
        ?>
        </body>
</html>