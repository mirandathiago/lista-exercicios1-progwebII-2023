8- O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
Entrada: número de habitantes da cidade A: 80000, taxa anual de crescimento da cidade A (%): 3, número de habitantes da cidade B: 200000, taxa anual de crescimento da cidade B (%): 1.5
Saída: Serão necessários 63 


<!DOCTYPE html>
<html>
<head>
	<title>População das cidades</title>
</head>
<body>
	<h1>População das cidades</h1>
	<form method="post">
		<label>Cidade A:</label><br>
		<label>Número de habitantes:</label>
		<input type="number" name="popA" required><br>
		<label>Taxa anual de crescimento (%):</label>
		<input type="number" name="taxaA" step="0.01" min="0" required><br>
		<br>
		<label>Cidade B:</label><br>
		<label>Número de habitantes:</label>
		<input type="number" name="popB" required><br>
		<label>Taxa anual de crescimento (%):</label>
		<input type="number" name="taxaB" step="0.01" min="0" required><br>
		<br>
		<button type="submit">Calcular</button>
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$popA = $_POST["popA"];
			$taxaA = $_POST["taxaA"] / 100;
			$popB = $_POST["popB"];
			$taxaB = $_POST["taxaB"] / 100;

			$anos = 0;
			while ($popA <= $popB) {
				$popA += $popA * $taxaA;
				$popB += $popB * $taxaB;
				$anos++;
				if ($anos > 100) { // Para evitar loops infinitos
					echo "<p>As cidades nunca terão a mesma população.</p>";
					break;
				}
			}

			if ($anos <= 100) {
				echo "<p>Serão necessários $anos anos para que a população da cidade A ultrapasse a população da cidade B.</p>";
				echo "<p>População da cidade A após $anos anos: " . number_format($popA, 0, ",", ".") . " habitantes.</p>";
				echo "<p>População da cidade B após $anos anos: " . number_format($popB, 0, ",", ".") . " habitantes.</p>";
			}
		}
	?>
</body>
</html>