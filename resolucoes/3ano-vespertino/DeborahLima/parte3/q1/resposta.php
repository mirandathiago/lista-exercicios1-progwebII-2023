<?php
	$n = $_GET["numero"];
	$fat = $n;
	$i = $n - 1;

	while($i != 1){
		$fat *= $i;
		$i--;
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
		<h1>Formulário Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Número <?=$n?></h2>
			<p>Fatorial: <?=$fat?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>