<!--3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6
-->
<?php
$pontoA = $_GET['intervaloA'];
$pontoB = $_GET['intervaloB'];
$cont = 0;
$pares = 0;
if ($pontoA < $pontoB) {
    for ($i = $pontoA; $i < $pontoB; $i++) {
        if ($i % 2 == 0) {
            $pares++;
        }
        $cont++;
    }
} else if ($pontoA > $pontoB) {
    for ($i = $pontoB; $i < $pontoA; $i++) {
        if ($i % 2 == 0) {
            $pares++;
        }
        $cont++;
    }
}
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
        <h1>Intervalo (<?= $pontoA ?>,<?= $pontoB ?>) = <?= $cont ?></h1>
        <p>O intervalo informado possui <?= $cont ?>. Considere como Intervalo inteiro, pois se levar ao pé da letra tera infinitos resultados. Deste intervalo <?= $pares ?> são pares</p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte3/Questão24/index.php"><button class="next">Next Page</button></a>
    </div>
    <a href="../../index.html"><button class="next">Página Inicial</button></a>
</body>

</html>