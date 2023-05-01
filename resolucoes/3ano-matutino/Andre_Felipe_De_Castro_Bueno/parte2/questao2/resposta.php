<?php 
/* 
2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. 
Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). 
Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
Exemplo de entrada: Consumo de energia: 250 kWh
Exemplo de saída: Valor da conta de energia: R$ 237,50
*/
$kWh = $_POST["cavats"] ?? 0;
$valor = $_POST["valor"] ?? 0;
$valorT = $_POST["valorT"] ?? 0;

$taxa = (20.00);
if($kWh <= (100)){
    $kWh *= (0.5);
}else if($kWh >= (101) && $kWh <= (200)){
    $kWh *= (0.7);
}else if($kWh >= (200)){
    $kWh *= (0.87);
}
$valorT = $kWh + $taxa;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <h1>Valor da conta de energia: R$<?=number_format($valorT, 2)?>.</h1>
    </div>
</body>
</html>