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
		<h1>10% de Desconto</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$val = $_POST["desconto"] ?? 0;

				$des = $val * 0.90; //1.00 = 0% de desconto, logo, 0.90 = 10% de desconto

			?>

			<?="<h2 class='alerta-verde'>O valor RS{$val}, com um desconto de 10% vai ficar: RS{$des}</h2>"?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>