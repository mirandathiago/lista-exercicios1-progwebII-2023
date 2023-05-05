<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pares</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Pares do Intervalo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php

				$inicial = $_POST["inicial"] ?? 0;
				$final = $_POST["final"] ?? 0;
				$pares = 0;

				for($inicial; $inicial <= $final; $inicial++){
					if($inicial % 2 == 0){
						$pares++;
					}
				}

				echo "<h2 class='alerta-verde'>Quantidade de números pares: ".$pares."</h2>";

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>