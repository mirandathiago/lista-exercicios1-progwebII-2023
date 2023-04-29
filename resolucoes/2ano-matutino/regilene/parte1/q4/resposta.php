<?php

	$combutivelnecessario = $_GET["combutivelnecessario"] ?? 00;
	$distanciapercorrida = $_GET["distanciapercorrida"] ?? 200;
	$consumodocombustivel = $_GET["consumodocombustivel"] ?? 10;

	$distanciapercorrida / $consumodocombustivel;

	$combutivelnecessario = $distanciapercorrida / $consumodocombustivel;

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
		<h1>Calculadora da quantidade de combustivel</h1>
	</header>

	<div class="container">
		<div class="box resposta">

			<h2>Resposta</h2>
			
			<p><?="Quantidade de combustível necessário é: {$combutivelnecessario} litros"?></p>

            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>
</body>
</html>