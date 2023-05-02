<?php
$distancia = $_GET["distancia"] ;
$tempo= $_GET["tempo"] ;
$velocidade = $distancia / $tempo;



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
		<h1>Velocidade média</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde"> A Velocidade média sera de <?=$velocidade?>km/h</p>
			
            <a href="formulario.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>