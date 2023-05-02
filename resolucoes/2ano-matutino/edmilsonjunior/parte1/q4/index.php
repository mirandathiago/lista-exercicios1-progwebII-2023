<?php
    $d = $_GET["distancia"] ?? 0;
    $c = $_GET["consumo"] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 4</title>
           <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
          <div class="container">
		<div class="box formulario">
        <form action="q4.php" method="get">
            <label>Informe o distânçia:
              <input type="number" name="distancia">
            </label>
     <br>
             <label>Informe o consumo medio:
              <input type="number" name="consumo">
            </label><br>
        <button>Enviar</button>
            </form></div>
        </div>
       <?php
            $q = $d / $c;
            echo "<p class='alerta-verde'>O Quantidade de combustivel necessaria: {$q} litros</p>";
        ?>
    </body>
</html>