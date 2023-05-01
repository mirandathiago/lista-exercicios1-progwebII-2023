<?php
    $num = $_GET["num"] ?? 0;
?>


<!DOCTYPE>
<html lang="pt-br">
    <head>
    <link rel="stylesheet" type="text/css" href="q2.css">
        <title>Questão 5</title>
        <meta charset="utf=-8">
    </head>
    <body>
        <h1>Tabuada</h1>
        <form action="index.php" method="get">
        <label> Informe o numero:
                <input type="number" name="num">
            </label>
            <br>
            <button>Enviar</button>
        </form>
        <?php
          
            $i = 1;
            while($i <= 10){
                $tabuada = $num * $i;
                echo "<h3>{$num} x {$i} = {$tabuada}</h3>";
                $i++;
            }
        
        ?>
    </body>

</html>