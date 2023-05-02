<?php
/*
	Questão número 12 da lista, Parte 2.

	Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
Exemplo de entrada: Consumo de energia: 250 kWh
Exemplo de saída: Valor da conta de energia: R$ 237,50

*/

$consumo =  $_GET['energia'] ?? 40;
 
if($consumo <= 100){
    $valorCobrado = 0.50*$consumo;
    $msg= "Seu consumo foi de $consumo, por isso sua taxa de energia será $valorCobrado";
    if($valorCobrado<=20){
        $valorCobrado =20;
        $msg = "O seu consumo foi de $consumo,e o preço mínimo é de R$20";
    }
}else if($consumo >= 100 && $consumo <= 200){
    $valorCobrado = 0.70*$consumo;
    $msg= "Seu consumo foi de $consumo, por isso sua taxa de energia será $valorCobrado";
    if($valorCobrado<=20){
        $valorCobrado =20;
        $msg = "O seu consumo foi de $consumo,e o preço mínimo é de R$20";
    }
}else if($consumo > 200){
    $valorCobrado = 0.87*$consumo;
    $msg= "Seu consumo foi de $consumo, por isso sua taxa de energia será $valorCobrado";
    if($valorCobrado<=20){
        $valorCobrado =20;
        $msg = "O seu consumo foi de $consumo,e o preço mínimo é de R$20";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Consumo de energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?=
                $msg
            ?></p>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>