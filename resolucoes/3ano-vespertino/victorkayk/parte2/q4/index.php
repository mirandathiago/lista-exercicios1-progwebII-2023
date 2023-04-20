<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
		$error = 'Por favor insira valores validos';
	} else {
		$a = intval($a);
		$b = intval($b);
		$c = intval($c);

		$delta = ($b ** 2) - (4 * $a * $c);

		if ($delta < 0) {
			$message = "A equação não possui raízes reais";
		} elseif ($delta == 0) {
			$message = "A equação possui uma única raiz real";
			$x1 = (-$b + sqrt($delta)) / (2 * $a);
		} else {
			$message = "A equação possui duas raízes reais";
			$x1 = (-$b + sqrt($delta)) / (2 * $a);
			$x2 = (-$b - sqrt($delta)) / (2 * $a);
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Bhaskara</h2>
			<form method="post" action="./index.php">
				<label>A:
					<input type="text" id="a" name="a" required>
				</label>
				<label>B:
					<input type="text" id="b" name="b" required>
				</label>
				<label>C:
					<input type="text" id="c" name="c" required>
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
				echo "<p class='alerta-verde'>{$message}</p>";
				if ($x1)
					echo "<p class='alerta-verde'>{$x1}</p>";
				if ($x2)
					echo "<p class='alerta-verde'>{$x2}</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>