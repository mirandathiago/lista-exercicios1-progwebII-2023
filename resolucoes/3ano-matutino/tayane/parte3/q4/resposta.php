<?php

	$numero = $_POST["numero"] ?? 0;
	$soma = 0;

	for($n=1; $n<=$numero; $n++){
		$soma = $soma + $n;
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
		<h1>Formulário de Soma</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Soma</h2>
			
			<p> A soma dos números é: <?=$soma?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>