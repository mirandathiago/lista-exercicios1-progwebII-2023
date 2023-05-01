<?php
	$l = $_GET["l"] ?? 0;
	$c = $_GET["c"] ?? 1;

	$area = $l*$c;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 6</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Área</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Área do Terreno</h2>
			<br>
			<form action="index6.php" method="get">
				<label>Largura (em m):
					<input type="number" id="nome" name="l" min="0" step="0.1" required>
				</label>

				<label>Comprimento (em m):
					<input type="number" id="nome" name="c" min="0" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<br>
			<p><?="A área do seu terreno de largura {$l}m e comprimento {$c}m é"?></p>
			<p class="alerta-verde"><?=$area, "m²"?></p>
		</div>
	</div>
</body>
</html>