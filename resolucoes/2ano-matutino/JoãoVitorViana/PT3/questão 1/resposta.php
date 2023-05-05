<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial do Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php

				$valor1 = $_POST["valor1"] ?? 0;
				$fatorial = 1;

				echo "<h2 class='alerta-verde'> ".$valor1."! = ";
				for($i = 1; $i <= $valor1; $i++){
					$fatorial = $fatorial*$i;
					echo $i;
					if($i < $valor1){
						echo " x ";
					}
				}
				echo " = ".$fatorial."</h2>";

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>