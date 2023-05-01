<?php

	$nome = $_POST["nome"] ?? "";
	$hora = date("H");
	if ( $hora >= 5 && $hora <= 12 ) {
		$mensagem = "Bom dia";
	}elseif ($hora >= 13 && $hora <= 17) {
		$mensagem = "Boa tarde";
	}elseif ($hora >= 18 && $hora <= 23) {
		$mensagem = "Boa noite";
	}elseif ($hora >= 00 && $hora <= 4) {
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
			<p><?=$mensagem?>, <?=$nome?>!</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>	