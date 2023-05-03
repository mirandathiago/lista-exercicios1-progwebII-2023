<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo1.css">
	<title>Questão 2</title>
</head>
<body>
	<h1>Campo Numérico</h1>
	<form method="post">
		<label for="numero">Insira um número:</label>
		<input type="number" name="numero" id="numero">
		<input type="submit" name="enviar" value="Enviar">
	</form>

	<?php
		if(isset($_POST['enviar'])) {
			$numero = $_POST['numero'];
			$dobro = $numero * 2;
			$metade = $numero / 2;

			echo "Dobro: " . $dobro . "<br>";
			echo "Metade: " . $metade;
		}
	?>
</body>
</html>