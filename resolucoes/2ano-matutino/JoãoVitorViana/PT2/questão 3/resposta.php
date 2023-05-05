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
		<h1>Saudações!</h1>
	</header>
	<div class="container">
		<div class="box resposta">

			<?php

$nome = $_POST["nome"] ?? "";

				date_default_timezone_set('America/Bahia');
				$hora_atual = date('H');

				if($hora_atual >= 05 && $hora_atual <= 12){
					echo "<h2 class='alerta-verde'>Olá! ".$nome.", Bom Dia.</h2>";

				}else if($hora_atual >= 13 && $hora_atual < 18){
					echo "<h2 class='alerta-verde'>Olá! ".$nome.", Boa Tarde.</h2>";

				}else if($hora_atual >= 18 && $hora_atual <= 23){
					echo "<h2 class='alerta-amarelo'>Olá! ".$nome.", Boa Noite.</h2>";

				}else if($hora_atual >= 00 && $hora_atual <= 04){
					echo "<h2 class='alerta-vermelho'>Hora de descansar, não é ".$nome." ? Zzzzzzzzzzzzzzzzz...😴</h2>";
				}

			?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>