<?php
$emprestimo = $_POST['emprestimo'] ?? 0;
$meses = $_POST['meses'] ?? 0;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	$total = $emprestimo * ((1 + 0.025) ** $meses);
	$total = number_format($total, 2, '.', '');
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 10</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 10</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calcula juros compostos banco</h2>
			<form method="post" action="./index.php">
				<label>Valor do emprestimo:
					<input type="number" id="emprestimo" name="emprestimo" value="5000" required>
				</label>

				<label>Meses:
					<input type="number" id="meses" name="meses" value="12" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			if ($total) {
				echo "<p class='alerta-verde'>Valor total a pagar R$ {$total}</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>