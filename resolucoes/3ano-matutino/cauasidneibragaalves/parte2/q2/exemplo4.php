// Questão 2, segunda parte da lista 

<!DOCTYPE>

<html>
<head>
<title> Trabalhando em PhP</title>
</head>
<body>
<form action= "exemplo4.php" method="Post">

<input type="consumo" name="consumo">
<input type="submit" Value=" Enviar">



</form>
<?php

$valora= 0.50;
$valorb= 0.70;
$valorc= 0.87;

$consumo= $_POST["consumo"];

if($consumo <=100){
    echo "O VALOR COBRADO SERÁ: $valora ";
}if($consumo >=101)
echo "O VALOR COBRADO SERÁ: $valorb";
else{
    echo "O VALOR COBRADO SERÁ: $valorc";
}

?>




</body>



</html>

/* Seu João quer saber quanto vai ser a sua conta de
 energia no mês apenas olhando para o medidor de 
energia de sua residência. Para ajudá-lo crie um formulário 
que receba o consumo de energia elétrica em kWh 
(quilowatts-hora). Em seguida, crie um código em PHP que
 calcule o 
valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de
 energia possui uma taxa
 mínima de R$ 20,00. Portanto, 
caso o valor calculado
 seja inferior a R$ 20,00, 
o valor a ser cobrado deve ser
 de R$ 20,00.* 
