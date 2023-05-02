<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="q3.css">
	<title>Quantidade de Números Pares em um Intervalo</title>
</head>
<body>
	<h1>Numeros Pares</h1>
	<form method="post" action="index.php">
		<label for="inicio">Informe o início do intervalo:</label>
		<input type="number" name="inicio" id="inicio">
		<label for="fim">Informe o fim do intervalo:</label>
		<input type="number" name="fim" id="fim">
		<input type="submit" name="enviar" value="Calcular">
	</form>

	<?php
		if(isset($_POST['enviar'])) {
			$inicio = $_POST['inicio'];
			$fim = $_POST['fim'];
			$quantidade_pares = 0;

			for($i = $inicio; $i <= $fim; $i++) {
				if($i % 2 == 0) {
					$quantidade_pares++;
				}
			}

			echo "Quantidade de números pares: " . $quantidade_pares;
		}
	?>
</body>
</html>
