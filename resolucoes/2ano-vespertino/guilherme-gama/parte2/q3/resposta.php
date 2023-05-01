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
				$hora_atual = date('H');

				if($hora_atual >= 05 && $hora_atual <= 12){
					echo "<h2 class='alerta-verde'>Bom Dia, ".$nome.".</h2>";
				}else if($hora_atual >= 13 && $hora_atual < 18){
					echo "<h2 class='alerta-verde'>Boa Tarde, ".$nome.".</h2>";
				}else if($hora_atual >= 18 && $hora_atual <= 23){
					echo "<h2 class='alerta-verde'>Boa Noite, ".$nome.".</h2>";
				}else if($hora_atual >= 00 && $hora_atual <= 04){
					echo "<h2 class='alerta-verde'>Vá Dormir, ".$nome.", está de Madrugada.</h2>";
				}

			?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>