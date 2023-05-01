<?php
	$valor = $_GET["valor"] ?? 0;
	$meses = $_GET["meses"] ?? 0;
	$i= 0.025; // 2,5%

	$total = $valor * pow((1 + 0.025), $meses);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Empréstimo</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Empréstimo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<!-- number_format = formata o valor como uma moeda brasileira. -->
			<h2 class="alerta-amarelo">O valor total a ser pago: <?= number_format($total, 2, ",", ".")?></h2>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>