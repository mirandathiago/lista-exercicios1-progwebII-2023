<!--7- Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
Exemplo:
Entrada:Temperatura em Celsius: 25
Saída:Temperatura em Fahrenheit: 77°F-->

<?php
    $celsius = $_POST["celsius"] ?? 0;
    $fahrenheit = ($celsius * 9/5) + 32;


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Temperatura</title>
</head>

<body>
    <h2>Temperatura em celsius:  <?=$celsius?>°C<br></h2>
    <h2>Temperatura em fahrenheit: <?=$fahrenheit?>°F</h2>

</body>

</html>