<?php
	$dist = $_POST["distancia"] ?? 0;
	$temp = $_POST["tempo"] ?? 0;

	$vm = $dist / $temp;

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
		<h1>Formulário de Distância</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Ah velociade média er de:</h2>
			<p class="alerta-verde"><?=round($vm, 2)?> Km/h </p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>