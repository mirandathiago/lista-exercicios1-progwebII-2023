<?php

	$consumedio = $_POST["consumedio"]?? 1;
	$distancia = $_POST["distancia"]?? 1;

	$combustivel = $distancia / $consumedio; 

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
		<h1>Calculando Consumo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<h2>Média Final</h2>
			<p>Quantidade de combustível necessário: <?=$combustivel?>L</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>