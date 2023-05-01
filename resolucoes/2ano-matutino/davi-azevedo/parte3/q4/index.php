<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="q4.css">
	<title>Soma dos Números de 1 a N</title>
</head>
<body>
	<h1>Somas dos Números</h1>
	<form method="post" action="index.php">
		<label for="numero">Informe um número inteiro:</label>
		<input type="number" name="numero" id="numero">
		<input type="submit" name="enviar" value="Calcular">
	</form>

	<?php
		if(isset($_POST['enviar'])) {
			$numero = $_POST['numero'];
			$soma = 0;

			for($i = 1; $i <= $numero; $i++) {
				$soma += $i;
			}

			echo "Soma dos números de 1 a " . $numero . ": " . $soma;
		}
	?>
</body>
</html>
