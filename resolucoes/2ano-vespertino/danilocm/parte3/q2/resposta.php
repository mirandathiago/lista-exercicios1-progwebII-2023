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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$valor1 = $_POST["valor1"] ?? 0;
				$i = 1;
				echo "<br>";
				echo "<h3>A tabuada de ".$valor1." é:</h3>";
				echo "<br>";
				while($i <= 10){
					$resultado = $valor1*$i;
					echo "<p>".$valor1." x ".$i." = ".$resultado."</p>";
					$i++;
				}

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>