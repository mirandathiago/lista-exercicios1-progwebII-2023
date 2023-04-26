<?php

	$distancia = $_POST["distancia"] ?? 0;
	$consumo = $_POST["consumo"] ?? 0;
	$quantidadecomb = $distancia/$consumo;//cálculo para saber a quantidade de combustível necessária
?>
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
		<h1>Formulário de Quantidade de Combustível</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado da quantidade de combustível</h2>
			<?php 
				echo " A distância de {$distancia} km, com um consumo médio de {$consumo} vai precisar de {$quantidadecomb} Litros";
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>