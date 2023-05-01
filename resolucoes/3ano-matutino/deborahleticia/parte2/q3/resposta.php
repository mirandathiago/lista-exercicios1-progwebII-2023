<?php

	$nome = $_POST["nome"] ?? "";
	date_default_timezone_set('America/Bahia');
	$hora = date("H");

	if($hora >= 05 && $hora <= 12){
		$mensagem = "Bom dia, {$nome}";
	}else if($hora > 13 && $hora <= 18){
		$mensagem = "Boa tarde, {$nome}";
	}else if($hora > 18 && $hora <= 23){
		$mensagem = "Boa noite, {$nome}";
	}else if($hora > 00 && $hora <= 04){
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
		<h1>Formulário de Saudação</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo"><?=$mensagem?></p>
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>