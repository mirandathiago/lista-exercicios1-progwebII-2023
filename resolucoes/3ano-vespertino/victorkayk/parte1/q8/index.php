<?php
$celular = $_POST['celular'] ?? 0;
$parcela = $_POST['parcela'] ?? 0;

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	$juros = $celular * 0.04 * $parcela;
	$total = $celular + $juros;
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
			<h2>Calcula juros simples celular</h2>
			<form method="post" action="./index.php">
				<label>Valor do celular:
					<input type="number" id="celular" name="celular" value="1000" required>
				</label>

				<label>Parcelas:
					<select name="parcela">
						<option value="0" selected>0x (A vista)</option>
						<option value="1">1x</option>
						<option value="2">2x</option>
						<option value="3">3x</option>
						<option value="4">4x</option>
						<option value="5">5x</option>
						<option value="6">6x</option>
						<option value="7">7x</option>
						<option value="8">8x</option>
						<option value="9">9x</option>
						<option value="10">10x</option>
						<option value="11">11x</option>
						<option value="12">12x</option>
					</select>
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