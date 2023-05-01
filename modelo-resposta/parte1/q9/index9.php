<?php
	$real = $_GET["real"] ?? 1;
	$cota = $_GET["cota"] ?? 1;

	$dolar = $real/$cota;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 9</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cotação do Dia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Conversão de Moeda</h2>
			<br>
			<form action="index9.php" method="get">
				<label>Valor (em reais):
					<input type="number" id="nome" name="real" min="0" step="0.01" required>
				</label>

				<label>Cotação do dólar (em reais):
					<input type="number" id="nome" name="cota" min="0" step="0.01" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor Final em Dólar</h2>
			<br>
			<p><?="Segundo a cotação informada, o valor final é"?></p>
			<p class="alerta-verde"><?="$",number_format($dolar, 2, '.', '');?></p>
		</div>
	</div>
</body>
</html>