<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
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

				echo "<h2 class='alerta-amarelo'> Soma dos números de 1 à ".$valor1." = ".$soma."</h2>";

?>
			
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>