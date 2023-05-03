<?php

	if ($_POST["REQUEST_METHOD"] == "POST") {

		$valor = $_POST["valor"];

		$meses = $_POST["meses"];

		$juros = 0.025; 

		$total = $valor *(1 + $juros, $meses);

		echo "Valor total a ser pago: R$ " ($total, 2, ',', '.');
	}
	?>



<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Décima questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Empréstimo</h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Empréstimo</h2>

            <a href="" class="link">Voltar</a>

		</div>

	</div>

</body>
</html>