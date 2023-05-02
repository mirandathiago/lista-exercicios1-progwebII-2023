<?php

	$velocidademedia = $_GET["velocidademedia"] ?? 00;
	$distanciaquepercorre = $_GET["distanciaquepercorre"] ?? 42;
	$tempoquecompleta = $_GET["tempoquecompleta"] ?? 4;

	$distanciaquepercorre / $tempoquecompleta;

	$velocidademedia = $distanciaquepercorre / $tempoquecompleta;

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
		<h1>Calculadora da velocidade média</h1>
	</header>

	<div class="container">
		<div class="box resposta">

			<h2>Resposta</h2>

			<p><?="A velocidade média é: {$velocidademedia} km/h"?></p>

            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>
</body>
</html>