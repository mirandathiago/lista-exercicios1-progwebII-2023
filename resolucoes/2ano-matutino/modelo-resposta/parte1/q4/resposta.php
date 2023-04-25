<?php
	$dist = $_POST["dist"] ?? 0;
	$cons = $_POST["consumo"] ?? 0;

	$quantc = $dist / $cons; 
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
		<h1>Formulário de Combustivel Necessário</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>A quantidade de combuativel necessário em  er de:</h2>
			<p class="alerta-verde"><?=round($quantc, 2)?> L </p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>