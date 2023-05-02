<?php 
	$valor = $_GET["valor"] ?? 100;
	$meses = $_GET["meses"] ?? 12;

	for($i=0; $i<$meses; $i++){

		$valor = $valor*(1+0.025);

	}
	$valor = number_format($valor, 2, '.', '');
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
		<h1>Valor Celular</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Valor a ser pago: <?=$valor?> em <?=$meses?> meses.</p>
		</div>
	</div>
</body>
</html>