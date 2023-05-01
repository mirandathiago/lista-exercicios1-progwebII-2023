<?php
	$num = $_POST["num"] ?? 0;

	$dobro = $num*2;
	$metade = $num/2;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora Básica</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o número</h2>
			<br>
			<form action="index2.php" method="post">
				<label>Número:
					<input type="number" id="nome" name="num" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<br>
			<p><?="Dobro: "?></p>
			<p class="alerta-verde"><?=$dobro?></p>
			<p><?="Metade: "?></p>
			<p class="alerta-verde"><?=$metade?></p>
		</div>
	</div>
</body>
</html>