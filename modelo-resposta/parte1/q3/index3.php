<?php
	$num1 = $_POST["num1"] ?? 0;
	$num2 = $_POST["num2"] ?? 0;
	$num3 = $_POST["num3"] ?? 0;

	$media = ($num1*2 + $num2*3 + $num3*5)/10;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Painel do Professor</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Notas</h2>
			<br>
			<form action="index3.php" method="post">
				<label>Nota 1 (Peso 2):
					<input type="number" id="nome" name="num1" min="0" max="10" step="0.01" required>
				</label>

				<label>Nota 2 (Peso 3):
					<input type="number" id="nome" name="num2" min="0" max="10" step="0.01" required>
				</label>

				<label>Nota 3 (Peso 5):
					<input type="number" id="nome" name="num3" min="0" max="10" step="0.01" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Média do Aluno</h2>
			<br>
			<p class="alerta-verde"><?=$media?></p>
		</div>
	</div>
</body>
</html>