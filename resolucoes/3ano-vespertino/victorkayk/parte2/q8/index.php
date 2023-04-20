<?php
$altura = $_POST['altura'];
$peso = $_POST['peso'];

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	if (!is_numeric($altura) || !is_numeric($peso)) {
		$error = 'Por favor insira valores validos';
	} else {
		$altura = floatval($altura);
		$peso = floatval($peso);

		$imc = $peso / ($altura ** 2);
		$imc = number_format($imc, 2, '.', '');

		if ($imc < 18.5) {
			$faixaPeso = "abaixo do peso";
		} elseif ($imc >= 18.5 && $imc <= 24.9) {
			$faixaPeso = "peso normal";
		} elseif ($imc >= 25 && $imc <= 29.9) {
			$faixaPeso = "sobrepeso";
		} elseif ($imc >= 30 && $imc <= 34.9) {
			$faixaPeso = "obesidade grau 1";
		} elseif ($imc >= 35 && $imc <= 39.9) {
			$faixaPeso = "obesidade grau 2";
		} elseif ($imc >= 40) {
			$faixaPeso = "obesidade grau 3";
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
			<h2>IMC</h2>
			<form method="post" action="./index.php">
				<label>Peso:
					<input type="text" id="peso" name="peso" required>
				</label>
				<label>Altura:
					<input type="text" id="altura" name="altura" required>
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
				echo "<p class='alerta-verde'>Seu IMC é {$imc}, você está na faixa de {$faixaPeso}.</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>