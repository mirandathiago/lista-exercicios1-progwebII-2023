<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>10% de Desconto</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$valor = $_POST["desconto"] ?? 0;

				$desconto = $valor * 0.90;

			?>

			<?="<h2 class='alerta-verde'>O produto de {$valor} reais com desconto de 10% agora custará: {$desconto} reais</h2>"?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>