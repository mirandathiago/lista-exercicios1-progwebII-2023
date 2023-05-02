<!--4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5

-->
<?php
$numero = $_GET['numero'] ?? 2;
$n = 0;
if($numero > 0){
    for ($i = 0; $i <= $numero; $i++) {
        $n += $i;
        $msg = " A soma de 1 até {$numero} = {$n}";
    }
}else if($numero < 0){
    for ($i = 0; $i >= $numero; $i--) {
        $n += $i;
        $msg = "A soma de 1 até {$numero} = {$n}";
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
        <h1><?=$n?></h1>
        <p> <?=$msg?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte3/Questão25/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>