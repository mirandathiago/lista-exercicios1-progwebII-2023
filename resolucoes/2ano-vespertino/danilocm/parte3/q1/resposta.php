<<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fator de um Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$valor = $_POST["valor1"] ?? 0;
				$fatorial = 1;

				echo "".$valor1."! = ";
				for($i = 1; $i <= $valor; $i++){
					$fatorial = $fatorial*$i;
					echo $i;
					if($i < $valor){
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