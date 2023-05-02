<?php
	$peso = $_POST["peso"] ?? 70;
	$altura = $_POST["altura"] ?? 1.70;

	// IMC = Peso / (Altura^2)
	$imc = $peso/($altura**2);

	$IMC = number_format($imc, 2, ".", ",");

	if($IMC < 18.5){
		$status = "Seu IMC é {$IMC}, você está na faixa  abaixo do peso";
		$classe = "alerta-amarelo";
	}else if($IMC >= 18 && $IMC <= 24.9){
		$status = "Seu IMC é {$IMC}, você está na faixa de peso normal";
		$classe = "alerta-verde";
	}else if($IMC >= 25 && $IMC <= 29.9){
		$status = "Seu IMC é {$IMC}, você está na faixa de sobrepeso";
		$classe = "alerta-vermelho";
	}else if($IMC >= 30 && $IMC <= 34.9){
		$status = "Seu IMC é {$IMC}, você está na faixa de obesidade grau 1";
		$classe = "alerta-vermelho";
	}else if($IMC >= 35 && $IMC <= 39.9){
		$status = "Seu IMC é {$IMC}, você está na faixa de obesidade grau 2";
		$classe = "alerta-vermelho";
	}else{
		$status = "Seu IMC é {$IMC}, você está na faixa de obesidade grau 3";
		$classe = "alerta-vermelho";
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
		<h1>Calculadora de IMC (Índice de Massa Corporal)</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de IMC (Índice de Massa Corporal)</h2>
			<p class="<?=$classe?>"><?=$status?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>