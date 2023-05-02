<!--8-  O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: abaixo do peabaso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
Exemplo de entrada e saída:
Entrada: Peso: 70 kg, Altura: 1.70 m
Saída: Seu IMC é 24.22, você está na faixa de peso normal.
Entrada: Peso: 90 kg, Altura: 1.75 m
Saída: Seu IMC é 29.39, você está na faixa de sobrepeso.
-->

<?php

  $peso= $_POST["peso"] ?? 0;
  $altura = $_POST["altura"] ?? 0;
  $mensagem = "";

  $imc = $peso / ($altura * $altura);
    if($imc < 18.5){
        $mensagem = "abaixo do peso";
    }elseif($imc >= 18.5 && $imc <= 24.9){
        $mensagem = "peso normal";
}elseif($imc >= 25 && $imc <= 29.9){
        $mensagem = "sobrepeso";
    }elseif($imc >= 30 && $imc<= 34.9){
        $mensagem = "obesidade grau 1";
    }elseif($imc >= 35 && $imc<= 39.9){
        $mensagem = "obesidade grau 2";
}else{
        $mensagem = "obesidade grau 3";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>IMC</title>
</head>

<body>
   
    <h2>A classsificaçao do IMC é: <?=$imc?> , você está <?=$mensagem?>.</h2>
    
</body>

</html>
