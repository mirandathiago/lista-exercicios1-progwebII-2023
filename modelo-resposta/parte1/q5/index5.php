<?php
	$dist = $_GET["dist"] ?? 0;
	$temp = $_GET["temp"] ?? 1;

	$vm = $dist/$temp;
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
		<h1>Maratona</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Velocidade Média</h2>
			<br>
			<form action="index5.php" method="get">
				<label>Distância (em km):
					<input type="number" id="nome" name="dist" min="0" step="0.1" required>
				</label>

				<label>Tempo (em h):
					<input type="number" id="nome" name="temp" min="0.1" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<br>
			<p><?="A velocidade média necessária para percorrer {$dist}km em {$temp}h é"?></p>
			<p class="alerta-verde"><?=$vm, "km/h"?></p>
		</div>
	</div>
</body>
</html>