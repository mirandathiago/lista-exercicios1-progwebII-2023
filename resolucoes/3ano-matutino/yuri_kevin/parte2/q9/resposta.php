<?php 
	$escolha = $_GET["escolha"] ?? "tempestuoso";


	echo $escolha;
	
	switch ($escolha){
		case 'ensolarado';
		$local = "Clube";
		break;

		case 'ameno';
		$local = "Parque";
		break;
		
		case 'chuvoso';
		$local = "Cinema";
		break;

		case 'nublado';
		$local = "Museu";
		break;

		case 'tempestuoso';
		$local = "Ficar em casa";
		break;
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
		<h1>Pra onde iremos</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Com o clima <?=$escolha?>, recomendamos ir pro seguinte lugar: <?=$local?></p>
		</div>
	</div>
</body>
</html>