<?php 
	$escolha = $_GET["escolha"] ?? "tempestuoso";


	echo $escolha;
	
	switch ($escolha){
		case 'Domingo';
		$msg = "Domingo é fim de semana";
		break;

		case 'Segunda-feira';
		$msg = "Segunda-feira é dia útil";
		break;
		
		case 'Terça-feira';
		$msg = "Terça-feira é dia útil";
		break;

		case 'Quarta-feira';
		$msg = "Quarta-feira é dia útil";
		break;

		case 'Quinta-feira';
		$msg = "Quinta-feira é dia útil";
		break;

		case 'Sexta-feira';
		$msg = "Sexta-feira é dia útil";
		break;

		case 'Sabádo';
		$msg = "Sabádo é Fim de semana";
		break;

		default:
		$msg = "Dia inválido";
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
		<h1>Dia útil ou sextou?</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?=$msg?></p>
		</div>
	</div>
</body>
</html>