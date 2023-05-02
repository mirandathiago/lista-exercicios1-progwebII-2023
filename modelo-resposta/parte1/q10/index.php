<?php
	// m = p * (1,025)**n
	$p = $_POST["vi"] ?? 0;
	$n = $_POST["parcelas"] ?? 1;

	$p = 1.025**$n*$p;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 10</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Empréstimo Bancário</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Valores</h2>
			<br>
			<form action="index.php" method="post">
				<label>Valor do Empréstimo:
					<input type="number" id="nome" name="vi" min=0 step=0.01 required>
				</label>

				<label>Parcelas:
					<select name="parcelas">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor Final</h2>
			<br>
			<p>O valor final a ser pago é </p>
			<p class="alerta-verde"><?="R$",number_format($p,2,",",".")?></p>
		</div>
	</div>
</body>
</html>