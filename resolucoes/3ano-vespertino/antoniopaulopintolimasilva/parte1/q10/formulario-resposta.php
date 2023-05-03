<?php
	$p = $_GET["num1"] ?? 100;
	$m = $_GET["num2"] ?? 5;

	$total = $p * (1 + 2.5/100) ** $m;

?>
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="formulario-resposta.php" method="get">
				<label>Valor do empréstimo:
					<input type="number"  name="num1" required>
				</label>

				<label>Número de meses de pagamento:
					<input type="number"  name="num2" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Valor total a ser pago: R$<?= number_format($total,2)?></p>			
		</div>
	</div>
</body>
</html>