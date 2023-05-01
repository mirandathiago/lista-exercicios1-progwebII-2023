<?php
$num = $_POST['num'] ?? 0;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	if (!is_numeric($num)) {
		$error = 'Por favor insira valores validos';
	} else {
		$fatorial = 1;

		if ($num != 0) {
			for ($i = $num; $i >= 1; $i--) {
				$fatorial *= $i;
			}
		}

	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fatorial</h2>
			<form method="post" action="./index.php">
				<label>Numero:
					<input type="number" id="num" name="num" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			if ($fatorial) {
				echo "<p class='alerta-verde'>Fatorial: {$fatorial}</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>