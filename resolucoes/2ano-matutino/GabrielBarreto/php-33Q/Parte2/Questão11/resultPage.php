<!--1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5
-->
<?php
$numero1 =  $_GET['numero1'] ?? 0;
$numero2 =  $_GET['numero2'] ?? 0;
$numero3 =  $_GET['numero3'] ?? 0;
if($numero1 > $numero2 && $numero1 > $numero3){
    $msg = " $numero1 é o maior!";
    $msg2 = ' ';
}else if($numero2 > $numero1 && $numero2 > $numero3){
    $msg = " $numero2 é o maior!";
    $msg2 = ' ';
}else if($numero3 > $numero1 && $numero3 > $numero2){
    $msg = "$numero3 é o maior!";
    $msg2 = ' ';
}else if($numero1 == $numero2 && $numero2 == $numero3){
    $msg ='Ambos os valores são Iguais!';
    $msg2 = ' ';
}else if($numero1 == $numero2){
    $msg = "Valor Um e Valor dois são Iguais! (Valor 1: $numero1 = Valor 2: $numero2)";
    $msg2 = ' ';
}else if($numero1 == $numero3){
    $msg = "Valor Um e Valor três são Iguais! (Valor 1: $numero1 = Valor 3: $numero3)";
    $msg2 = ' ';
}else if($numero2 == $numero3){
    $msg = "Valor dois e Valor três são Iguais! (Valor 2: $numero2 = Valor 3: $numero3)";
    $msg2 = ' ';
}
if($numero1 < $numero2 && $numero1 < $numero3){
    $msg2 = " $numero1 é o menor!";
}else if($numero2 < $numero1 && $numero2 < $numero3){
    $msg2 = " $numero2 é o menor!";
}else if($numero3 < $numero1 && $numero3 < $numero2){
    $msg2 = "$numero3 é o menor!";
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
        <h1>Os valores são:</h1>
        <p><?=$msg?> . <?=$msg2?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte2/Questão12/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>