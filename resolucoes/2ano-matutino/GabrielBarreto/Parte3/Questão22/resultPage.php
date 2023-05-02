<!--2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28

-->
<?php
$numero =  $_GET['numeroDatabuada'] ?? 1;
$numeroLimite =  $_GET['numeroLimite'] ?? 1;
$numeroParaMultiplicar = 0;


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com um desconto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Tabuada do <?=$numero?></h1>
        <p> <?php
        while($numeroParaMultiplicar <= $numeroLimite ){
            $resultado = $numeroParaMultiplicar*$numero;
            echo "$numero X $numeroParaMultiplicar = $resultado <br>";
            $numeroParaMultiplicar++;
        }
        ?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte3/Questão23/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>