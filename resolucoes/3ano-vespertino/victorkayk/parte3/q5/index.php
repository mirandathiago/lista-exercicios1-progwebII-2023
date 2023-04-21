<?php
$divida = $_POST['divida'] ?? 0;
$juros = $_POST['juros'] ?? 0;
$pagMensal = $_POST['pagMensal'] ?? 0;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	if (!is_numeric($divida) || !is_numeric($juros) || !is_numeric($pagMensal)) {
		$error = 'Por favor insira valores validos';
	} else {
		$quantMes = 0;

		while ($divida > 0) {
			$divida += $divida * ($juros / 100);
			$divida -= $pagMensal;
			$quantMes++;
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 5</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Divida de pedro</h2>
			<form method="post" action="./index.php">
				<label>Divida:
					<input type="number" id="divida" name="divida" required>
				</label>
				<label>Juros mensal:
					<input type="number" id="juros" name="juros" required>
				</label>
				<label>Pagamento mensal:
					<input type="number" id="pagMensal" name="pagMensal" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			echo "<p class='alerta-verde'>Serão necessários {$quantMes} ";
			echo $quantMes == 1 ? "mes" : "meses";
			echo " para quitar a dívida.</p>";
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>