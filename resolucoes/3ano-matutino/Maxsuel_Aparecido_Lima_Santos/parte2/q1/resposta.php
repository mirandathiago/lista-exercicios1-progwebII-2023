<?php

	$n1 = $_POST["n1"] ?? 1;
	$n2 = $_POST["n2"] ?? 2;
	$n3 = $_POST["n3"] ?? 3;

	$maior = $n1;
	$menor = $n1;

	if($n2 > $maior){
		$maior = $n2;
	} if($n3 > $maior){
		$maior = $n3;
	} if($n2 < $menor){
		$menor = $n2;
	} if($n3 < $menor){
		$menor = $n3;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Maior e Menor Número</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde">Maior Número Digitado: <?= $maior ?></p>
			<p class="alerta-amarelo">Menor Número Digitado: <?= $menor ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>