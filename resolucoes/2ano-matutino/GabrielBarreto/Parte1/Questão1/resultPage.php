<!--1- Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
Entrada: Preço original: R$ 50,00
Saída: Preço com desconto: R$ 45,00
-->
<?php
$valorOriginal =  $_GET['valorOriginal'] ?? 50;
$valorDesconto = number_format($valorOriginal * 0.1,2);
$resultado = $valorOriginal- $valorDesconto;
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
        <h1>R$<?= $resultado ?></h1>
        <p>Preço original: <?=$valorOriginal?><br>
        Preço com desconto: <?= $resultado?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../Questão2/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
    
</body>

</html>