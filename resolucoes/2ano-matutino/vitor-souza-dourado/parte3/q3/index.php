<!DOCTYPE html>
<html>
<head>
	<title> QUESTÃO 3 / PARTE 3</title>
</head>
<body>
<h4> QUESTÃO 3/ PARTE 3 </h4> <br>
	<h1>Contagem de números pares</h1>
	<form method="POST">
		<label for="inicio">Início do intervalo:</label>
		<input type="number" name="inicio" id="inicio"><br><br>
		<label for="fim">Fim do intervalo:</label>
		<input type="number" name="fim" id="fim"><br><br>
		<input type="submit" value="Calcular">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$inicio = $_POST["inicio"];
			$fim = $_POST["fim"];

			$contagem = 0;

			for ($i = $inicio; $i <= $fim; $i++) {
				if ($i % 2 == 0) {
					$contagem++;
				}
			}

			echo "<p>Quantidade de números pares: " . $contagem . "</p>";
		}
	?>
	
</body>
</html>