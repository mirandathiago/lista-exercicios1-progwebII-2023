<?php
	$tc = $_GET["tc"] ?? 0;

	$tf = ($tc*(9/5)) + 32;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 7</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Escalas Termométricas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Celsius para Fahrenheit</h2>
			<br>
			<form action="index.php" method="get">
				<label>Temperatura (em graus Celsius):
					<input type="number" id="nome" name="tc" min="0" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<br>
			<p><?="A temperatura {$tc}°C equivale a"?></p>
			<p class="alerta-verde"><?=$tf, "°F"?></p>
		</div>
	</div>
</body>
</html>