<!DOCTYPE html>
<html>
<head>
	<title>Questão 8/ parte 2</title>
</head>
<body>
<h4> QUESTÃO 8/ PARTE 2</h4> <br>
	<h1>Calculadora de IMC</h1>
	<form method="post" action="index.php">
		<label for="peso">Peso (kg): </label>
		<input type="number" name="peso" id="peso" step="0.01" required><br>
		<label for="altura">Altura (m): </label>
		<input type="number" name="altura" id="altura" step="0.01" required><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>

	<?php
	if (isset($_POST['calcular'])) {
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
		$imc = $peso / ($altura ** 2);

		echo "<p>Seu IMC é " . number_format($imc, 2) . ", você está na faixa de ";

		if ($imc < 18.5) {
			echo "abaixo do peso.</p>";
		} elseif ($imc >= 18.5 && $imc <= 24.9) {
			echo "peso normal.</p>";
		} elseif ($imc >= 25 && $imc <= 29.9) {
			echo "sobrepeso.</p>";
		} elseif ($imc >= 30 && $imc <= 34.9) {
			echo "obesidade grau 1.</p>";
		} elseif ($imc >= 35 && $imc <= 39.9) {
			echo "obesidade grau 2.</p>";
		} else {
			echo "obesidade grau 3.</p>";
		}
	}
	?>
	
</body>
</html>