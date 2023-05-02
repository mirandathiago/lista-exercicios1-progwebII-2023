<?php
	$n = $_GET["numero"];
	$cem = 0;
	$cinq = 0;
	$vinte = 0;
	$dez = 0;
	$cinco = 0;
	$dois = 0;
	$um = 0;

	while($n >= 100){
		$n -= 100;
		$cem += 1;
	}

	while($n >= 50){
		$n -= 50;
		$cinq += 1;
	}

	while($n >= 20){
		$n -= 20;
		$vinte += 1;
	}
	
	while($n >= 10){
		$n -= 10;
		$dez += 1;
	}

	while($n >= 5){
		$n -= 5;
		$cinco += 1;
	}
	
	while($n >= 2){
		$n -= 2;
		$dois += 1;
	}

	while($n >= 1){
		$n -= 1;
		$um += 1;
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
		<h1>Formulário de Cédulas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Cédulas</h2>
			<p><br>Notas de 100 - <?=$cem?><br>Notas de 50 - <?=$cinq?><br>Notas de 20 - <?=$vinte?>
			<br>Notas de 10 - <?=$dez?><br>Notas de 5 - <?=$cinco?><br>Notas de 2 - <?=$dois?>
			<br>Notas de 1 - <?=$um?><br></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>