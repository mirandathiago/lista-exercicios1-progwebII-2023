<?php
	$nome = $_POST["nome"];

    date_default_timezone_set('America/Sao_Paulo');
	$hora = date("H:i A");

	if($hora >= "00:00" && $hora <= "04:59"){
		$mensagem = "Vá Dormir, está de Madrugada.";
	}if($hora >= "05:00" && $hora <= "12:59"){
		$mensagem = "Bom dia,";
	}if($hora >= "13:00" && $hora <= "18:59"){
		$mensagem = "Boa Tarde,";
	}if($hora >= "19:00" && $hora <= "23:59"){
		$mensagem = "Boa Noite,";
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
		<h1>Formulário Hora do dia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2><?=$mensagem?> <?=$nome?></h2>
			<p>Hora: <?=$hora?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>