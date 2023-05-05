<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário Tabuada</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php

				$valor1 = $_POST["valor1"] ?? 0;
				$i = 1;
				echo "<br>";
				echo "<h3>A tabuada do número ".$valor1." é:</h3>";
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