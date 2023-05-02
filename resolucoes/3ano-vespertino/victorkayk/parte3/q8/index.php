<?php
$habitantesA = $_POST['habitantesA'] ?? 0;
$taxaA = $_POST['taxaA'] ?? 0;
$habitantesB = $_POST['habitantesB'] ?? 0;
$taxaB = $_POST['taxaB'] ?? 0;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	if (!is_numeric($habitantesA) || !is_numeric($taxaA) || !is_numeric($habitantesB) || !is_numeric($taxaB)) {
		$error = 'Por favor insira valores validos';
	} else {
		$habitantesA = intval($habitantesA);
		$habitantesB = intval($habitantesB);
		$taxaA = floatval($taxaA);
		$taxaB = floatval($taxaB);

		if ($habitantesA > $habitantesB) {
			$error = 'A cidade A ja tem mais habitantes que a cidade B';
		} elseif ($taxaA < $taxaB) {
			$error = 'A cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.';
		}

		$anos = 0;
		while ($habitantesB > $habitantesA) {
			$habitantesA += $habitantesA * ($taxaA / 100);
			$habitantesB += $habitantesB * ($taxaB / 100);
			$anos++;
		}

	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 8</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 8</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>População</h2>
			<form method="post" action="./index.php">
				<label>Habitantes da cidade A:
					<input type="text" id="habitantesA" name="habitantesA" required>
				</label>
				<label>Taxa de crescimento da população da cidade A:
					<input type="text" id="taxaA" name="taxaA" required>
				</label>
				<label>Habitantes da cidade B:
					<input type="text" id="habitantesB" name="habitantesB" required>
				</label>
				<label>Taxa de crescimento da população da cidade B:
					<input type="text" id="taxaB" name="taxaB" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			if ($error) {
				echo "<p class='alerta-vermelho'>{$error}</p>";
			} else {
				echo "<p class='alerta-verde'>Serão necessários {$anos} anos para que a população da cidade A ultrapasse a da cidade B.</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>