<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Instituto Nacional de Estatística</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Número de habitantes da cidade A:
					<input type="number" id="numA" name="numA" required>
				</label>

				<label>Taxa anual de crescimento da cidade A(%):
					<input type="number" id="taxaA" step="0.01" name="taxaA" required>
				</label>
				<label>Número de habitantes da cidade B:
					<input type="number" id="numB" name="numB" required>
				</label>

				<label>Taxa anual de crescimento da cidade B(%):
					<input type="number" id="taxaB" step="0.01" name="taxaB" required>
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$numA = $_POST["numA"]??0;
			$taxaA = $_POST["taxaA"]??0;
			$taxaA=$taxaA/100;
			$numB = $_POST["numB"]??0;
			$taxaB = $_POST["taxaB"]??0;
			$taxaB=$taxaB/100;

			$anos = 0;
			if ($numA >= $numB) {
				echo "<p>A população de A já é maior do que a população de B.</p>";
			  } else if ($taxaA <= $taxaB) {
				echo "<p>A cidade A não alcançará a população da cidade B com essa taxa de crescimento.</p>";
			  } else {
				while ($numA < $numB) {
				  $numA = $numA * (1 + $taxaA);
				  $numB = $numB * (1 + $taxaB);
				  $anos++;
				}
				echo "<p>Serão necessários " . $anos . " anos para que a população da cidade A ultrapasse a da cidade B.</p>";
				echo "<br>";
			  }
			  
?>
		</div>
	</div>
</body>
</html>