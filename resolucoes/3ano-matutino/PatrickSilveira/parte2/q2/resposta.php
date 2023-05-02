<?php
    /*
    2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia 
	de sua residência. 
	Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). 
	Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
		Até 100 kWh, o valor é de R$ 0,50 por kWh.
		De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
		Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
	
		Além disso, a conta de energia possui uma taxa mínima de R$ 20,00.
		Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
			Exemplo de entrada: Consumo de energia: 250 kWh
			Exemplo de saída: Valor da conta de energia: R$ 237,50

    */

    $kwh = $_POST["kwh"] ?? 40;
    
	if($kwh <= 100){
		$valor = $kwh * 0.50;
		if($valor < 20){
			$valor = 20;
		}
	}else if($kwh >= 101 && $kwh <= 200){
		$valor = $kwh * 0.70;
	}else if($kwh > 200){
		$valor = $kwh * 0.87;
	}
    

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor da conta de energia:</h2>
			<p class="alerta-amarelo">R$<?="{$valor}"?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>