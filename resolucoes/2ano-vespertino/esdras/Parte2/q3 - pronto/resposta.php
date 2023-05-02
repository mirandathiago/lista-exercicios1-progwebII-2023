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
		<h1>Mensagem</h1>
	</header>
	<div class="container">
		<div class="box resposta">

			<?php

				$nome = $_POST["nome"] ?? "";

				date_default_timezone_set('America/Bahia');
				$horario_atual = date('H');

				if($horario_atual >= 05 && $horario_atual <= 12){
					echo "<h2 class='alerta-verde'>Bom Dia, ".$nome."!</h2>";
				}else if($horario_atual >= 13 && $horario_atual < 18){
					echo "<h2 class='alerta-verde'>Boa Tarde, ".$nome."!</h2>";
				}else if($horario_atual >= 18 && $horario_atual <= 23){
					echo "<h2 class='alerta-verde'>Boa Noite, ".$nome."!</h2>";
				}else if($horario_atual >= 00 && $horario_atual <= 04){
					echo "<h2 class='alerta-verde'>Vá Dormir, ".$nome.", está de Madrugada!</h2>";
				}

			?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>