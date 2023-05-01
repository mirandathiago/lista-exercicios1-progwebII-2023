<?php

	$nota1 = $_POST["nota1"] ?? 0;
	$nota2 = $_POST["nota2"] ?? 0;
	$nota3 = $_POST["nota3"] ?? 0;

	$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;



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
		<h1>Média Ponderada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Média Final</h2>
			<p><?=$media?></p>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>