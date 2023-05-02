<?php
	$peso = $_GET["peso"] ?? 1;
	$altura = $_GET["altura"] ?? 1;

	$imc = ($peso)/($altura**2);
	$imc = number_format($imc,2,".");

	if($imc < 18.5){
		$alerta = "alerta-amarelo";
		$mensagem = "Seu IMC é {$imc}, você está na faixa de abaixo do peso!";
	}else if(18.5 <= $imc && $imc <= 24.9){
		$alerta = "alerta-verde";
		$mensagem = "Seu IMC é {$imc}, você está na faixa de peso normal!";
	}else if(25 <= $imc && $imc <= 29.9){
		$alerta = "alerta-amarelo";
		$mensagem = "Seu IMC é {$imc}, você está na faixa de sobrepeso!";
	}else if(30 <= $imc && $imc <= 34.9){
		$alerta = "alerta-vermelho";
		$mensagem = "Seu IMC é {$imc}, você está na faixa de obesidade grau 1!";
	}else if(35 <= $imc && $imc <= 39.9){
		$alerta = "alerta-vermelho";
		$mensagem = "Seu IMC é {$imc}, você está na faixa de obesidade grau 2!";
	}else{
		$alerta = "alerta-vermelho";
		$mensagem = "Seu IMC é {$imc}, você está na faixa de obesidade grau 3!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 8</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados</h2>
			<br>
			<form action="index.php" method="get">
				<label>Insira o peso (em kg):
					<input type="number" id="nome" name="peso" step=0.01 min=1 required>
				</label>

				<label>Insira a altura (em cm):
					<input type="number" id="nome" name="altura" step = 0.01 min=1 required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>IMC Calculado</h2>
			<br>
			<p class="<?=$alerta?>"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>