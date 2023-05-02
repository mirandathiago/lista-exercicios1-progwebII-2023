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
		<h1>Soma dos Número Até N</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				$valor1 = $_POST["valor1"] ?? 0;
				$soma = 0;

				for($i = 1; $i <= $valor1; $i++){
					$soma += $i;
				}

				echo "Soma dos números de 1 a ".$valor1.": ".$soma."</h2>";

			?>
			
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>