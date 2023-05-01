<?php
	$n = $_GET["numero"];
	$soma = $n;

	for($i = 0; $i < $n; $i++){
		$soma += $i;
	}
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
		<h1>Formulário Soma de Números</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Numero: <?=$n?></h2>
			<p>Soma: <?=$soma?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>