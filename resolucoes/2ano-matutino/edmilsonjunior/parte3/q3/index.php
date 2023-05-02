<?php
    $n1 = $_GET["num1"] ?? 0;
    $n2 = $_GET["num2"] ?? 0;
?>
<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 3</title>
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>  <div class="container">
		<div class="box formulario">
        <form action="index.php" method="get">
            <label>Informe o primeiro numero:
            <input type="number" name="num1">
            </label><br>
            <label>Informe o segundo numero:
            <input type="number" name="num2">
            </label><br>
            <button>Enviar</button>
            <hr>
            </form></div>
        </div>
        <?php
            $numpar=0;
            for($i = $n1;$i <= $n2;$i++){
                if($i % 2 == 0){
                    $numpar++;
                }
            }
        echo "<h3 class='alerta-verde'>Quantidade de numeros pares: {$numpar}</h3>";
        ?>
    </body>
</html>