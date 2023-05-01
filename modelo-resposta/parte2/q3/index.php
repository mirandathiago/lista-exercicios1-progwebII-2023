<?php
	$nome = $_GET["nome"] ?? "";

	$hora = date("H");

	if($hora >= 5 && $hora <= 12){
		$mensagem = "Bom Dia, {$nome}!";
	}else if($hora >= 13 && $hora <= 18){
		$mensagem = "Boa Tarde, {$nome}!";
	}else if($hora >= 19 && $hora <= 23){
		$mensagem = "Boa Noite, {$nome}!";
	}else{
		$mensagem = "Vá dormir, {$nome}!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Programa Educado</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados</h2>
			<form action="index.php" method="get">
				<label>Insira seu nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Saudação</h2>
			<br>
			<p class="alerta-verde"><?=$mensagem?></p>
		</div>
	</div>
</body>
</html>