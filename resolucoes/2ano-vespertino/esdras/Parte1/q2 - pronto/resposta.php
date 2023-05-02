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
		<h1>Dobro e a Metade</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$valor = $_POST["dobroemetade"] ?? 0;

				$dobro = $valor*2;
				$metade = $valor/2;

			?>
			
			<?="<h2 class='alerta-verde'>Número Digitado: {$valor}<br>Dobro: {$dobro}<br>Metade: {$metade}</h2>"?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>