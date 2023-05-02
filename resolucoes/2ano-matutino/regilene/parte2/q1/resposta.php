<?php


	$numero1 = $_POST["numero1"] ?? 0;
	$numero2 = $_POST["numero2"] ?? 0;
	$numero3 = $_POST["numero3"] ?? 0;

	if($numero1>$numero2 && $numero1>$numero3){
		$maior=$numero1; 
	}else if($numero2>$numero3){
		$maior=$numero2;
	}else{
		$maior=$numero3;
	}

	if($numero1<$numero2 && $numero1<$numero3){
		$menor=$numero1; 
	}else if($numero2<$numero3){
		$menor=$numero2;
	}else{
		$menor=$numero3;
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
		<h1>Maior e Menor Número</h1>
	</header>

	<div class="container">
		<div class="box resposta">

			<h2>Resposta</h2>

			<p>Maior Número</p>
			<p class="alerta-verde"><?=$maior?></p>
			<p>Menor Número</p>
			<p class="alerta-verde"><?=$menor?></p>

            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>
</body>
</html>