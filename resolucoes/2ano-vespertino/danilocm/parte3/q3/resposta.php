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
		<h1>Pares do Intervalo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$inicial = $_POST["inicial"] ?? 0;
				$final = $_POST["final"] ?? 0;
				$pares = 0;

				for($inicial; $inicial <= $final; $inicial++){
					if($inicial % 2 == 0){
						$pares++;
					}
				}

				echo "Quantidade de números pares: ".$pares."</h2>";

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>