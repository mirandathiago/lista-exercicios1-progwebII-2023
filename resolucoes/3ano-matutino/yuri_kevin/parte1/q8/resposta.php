<?php 
	$valor = $_GET["valor"] ?? 1000;
	$parcelas = $_GET["parcelas"] ?? 0;

	if($parcelas==0){
		//á vista, não precisa mexer no valor
	}
	else{
		$valor = $valor * 1.004;
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
			<p>Valor a ser pago: <?=$valor?> em <?=$parcelas?> meses.</p>
		</div>
	</div>
</body>
</html>