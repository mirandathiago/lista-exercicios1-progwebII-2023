<?php
	$dist = $_GET["dist"] ?? 0;
	$cons = $_GET["cons"] ?? 1;

	$combustivel = $dist/$cons;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Combustível</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Combustível</h2>
			<br>
			<form action="index.php" method="get">
				<label>Distância a ser percorrida (em km):
					<input type="number" id="nome" name="dist" min="0" step="0.1" required>
				</label>

				<label>Consumo médio de combustível (em km/l):
					<input type="number" id="nome" name="cons" min="0.1" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<br>
			<p><?="Para percorrer uma distância de {$dist}km com consumo de {$cons}km/l é necessário"?></p>
			<p class="alerta-verde"><?=$combustivel, " litros de combustível!"?></p>
		</div>
	</div>
</body>
</html>