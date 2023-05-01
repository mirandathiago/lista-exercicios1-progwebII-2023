<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>População das cidades</title>
</head>
<body>
	<form method="post" action="questao8.php">
		<label>Cidade A:</label><br>
		<label>População atual:</label>
		<input type="number" name="populacaoA" required><br>
		<label>Taxa de crescimento anual (em %):</label>
		<input type="number" name="taxaA" required><br><br>

		<label>Cidade B:</label><br>
		<label>População atual:</label>
		<input type="number" name="populacaoB" required><br>
		<label>Taxa de crescimento anual (em %):</label>
		<input type="number" name="taxaB" required><br><br>

		<button type="submit">Calcular</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$populacaoA = $_POST['populacaoA'];
		$taxaA = $_POST['taxaA'] / 100;
		$populacaoB = $_POST['populacaoB'];
		$taxaB = $_POST['taxaB'] / 100;

		if ($populacaoA >= $populacaoB) {
			echo "A população de A já é maior ou igual à população de B.";
		} elseif ($taxaA <= $taxaB) {
			echo "A taxa de crescimento de A é menor ou igual à taxa de crescimento de B, portanto A nunca alcançará a população de B.";
		} else {
			$anos = 0;
			while ($populacaoA < $populacaoB) {
				$anos++;
				$populacaoA += $populacaoA * $taxaA;
				$populacaoB += $populacaoB * $taxaB;
			}

			echo "A população de A ultrapassará a população de B em $anos anos.<br>";
			echo "População de A: " . number_format($populacaoA, 0, ',', '.') . " habitantes.<br>";
			echo "População de B: " . number_format($populacaoB, 0, ',', '.') . " habitantes.";
		}
	}
	?>
</body>
</html>