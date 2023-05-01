<?php
	$num1 = $_GET["num1"] ?? 0;
	$pi = $_GET["pi"] ?? "par";

	$num2 = rand(0,10);

	$soma = $num1 + $num2;

	if($soma % 2 == 0){
		$pn = "par";
	}else{
		$pn = "ímpar";
	}

	if(($soma % 2 == 0 && $pi == "par") || ($soma % 2 != 0 && $pi == "ímpar")){
		$mensagem = "{$soma} é $pn e o usuário venceu!";
		$alerta = "alerta-verde";
	}else{
		$mensagem = "{$soma} é $pn e o computador venceu!";
		$alerta = "alerta-vermelho";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Par ou Ímpar</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Jogar</h2>
			<br>
			<form action="index.php" method="get">
				<label>Insira um número de 1 a 10:
					<input type="number" id="nome" name="num1" min=1 max=10 required>
				</label>

				<label>Paridade:
				<br>
				<input type=radio name=pi value="par">Par
				<br>
				<input type=radio name=pi value="ímpar">Ímpar
				<br><br>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<br>
			<p><?="O usuário escolheu $pi e o número {$num1}. O computador sorteou o número {$num2}, e a soma deles é {$soma}."?></p>
			<p class="<?=$alerta?>"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>