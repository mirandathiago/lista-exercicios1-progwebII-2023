<?php
$distancia = $_GET["distancia"] ;
$consumo= $_GET["consumo"] ;
$combustivel_necessario = $distancia / $consumo ;



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
		<h1>Valor</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde"> A quantidade de combustivel necessaria será de <?=$combustivel_necessario?> litros </p>
			
            <a href="formulario.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>