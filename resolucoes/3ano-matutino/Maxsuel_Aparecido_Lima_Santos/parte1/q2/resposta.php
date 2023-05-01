<?php

	$valor = $_POST["valor"];
	$dobro = $valor * 2;
	$metade = $valor / 2;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dobro e Metade</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Resposta</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde">Dobro: <?= number_format($dobro, 2, ',', '.') ?></p>
			<p class="alerta-vermelho">Metade: <?= number_format($metade, 2, ',', '.') ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>