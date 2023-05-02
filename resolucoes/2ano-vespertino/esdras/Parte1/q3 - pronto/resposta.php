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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$valor1 = $_POST["valor1"] ?? 0;
				$valor2 = $_POST["valor2"] ?? 0;
				$valor3 = $_POST["valor3"] ?? 0;

				$media = ($valor1*2+$valor2*3+$valor3*5)/10;
			?>

			<?="<h2 class='alerta-verde'>A media final desse aluno é: {$media}</h2>"?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>