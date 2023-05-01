<?php
	$valor = $_GET["valor"] ?? 0;
	$valor -= 0.1*$valor;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo de Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Desconto de 10%</h2>
			<form action="index.php" method="get">
				<label>Valor:
					<input type="number" id="nome" name="valor" step="0.01" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor Final</h2>
			<br>
			<p><?="O valor final do seu produto com desconto de 10% é de "?></p>
			<p class="alerta-verde"><?="R$",number_format($valor,2,",",".")?></p>
		</div>
	</div>
</body>
</html>