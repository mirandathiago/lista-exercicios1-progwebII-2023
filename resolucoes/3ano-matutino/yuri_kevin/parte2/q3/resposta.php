<?php 
	date_default_timezone_set('America/Bahia');
	$nome = $_GET["nome"] ?? "Yuri"; 
	$h = date('H');
	
	if($h>=5 && $h<=12){
		$mensagem = "Bom dia";

	}
	else if($h>=13 && $h<=18){
		$mensagem = "Boa tarde";

	}
	else if($h>=19 && $h<=23){
		$mensagem = "Boa noite";

	}
	else if($h>=00 && $h<=4){
		$mensagem = "Vá dormir, está de madrugada";

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
		<h1>Valor Celular</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?=$mensagem?>, <?=$nome?>!</p>
		</div>
	</div>
</body>
</html>