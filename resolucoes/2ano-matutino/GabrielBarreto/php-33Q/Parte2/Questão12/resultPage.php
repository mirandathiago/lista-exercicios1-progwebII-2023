<!--Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
Exemplo de entrada: Consumo de energia: 250 kWh
Exemplo de saída: Valor da conta de energia: R$ 237,50


-->
<?php
$consumoKWH =  $_GET['consumokwh'] ?? 50;
 
if($consumoKWH <= 100){
    $valorCobrado = 0.50*$consumoKWH;
    $msg= ' ';
    if($valorCobrado<=20){
        $valorCobrado =20;
        $msg = 'O preço mínimo é de R$20';
    }
}else if($consumoKWH >= 100 && $consumoKWH <= 200){
    $valorCobrado = 0.70*$consumoKWH;
    $msg= ' ';
    if($valorCobrado<=20){
        $valorCobrado =20;
        $msg = 'O preço mínimo é de R$20';
    }
}else if($consumoKWH > 200){
    $valorCobrado = 0.87*$consumoKWH;
    $msg= ' ';
    if($valorCobrado<=20){
        $valorCobrado =20;
        $msg = 'O preço mínimo é de R$20';;
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
        <h1>R$ <?=$valorCobrado?></h1>
        <p> Será cobrado um valor de R$ <?=number_format($valorCobrado,2)?>. <?=$msg?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte2/Questão13/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>