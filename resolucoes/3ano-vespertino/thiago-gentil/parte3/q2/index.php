<!DOCTYPE html>
<html>
<head>
	<title>Tabuada de multiplicação</title>
</head>
<body>
	<h2>Informe um número inteiro para ver sua tabuada:</h2>
	<form method="post">
		<input type="number" name="numero">
		<input type="submit" value="Calcular">
	</form>
	<br>
	<?php
		if (isset($_POST['numero'])) {
			$numero = $_POST['numero'];
			$i = 1;
			echo "<h3>Tabuada de multiplicação do número $numero:</h3>";
			while ($i <= 10) {
				$resultado = $numero * $i;
				echo "$numero x $i = $resultado <br>";
				$i++;
			}
		}
	?>
</body>
</html>
