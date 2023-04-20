<?php
//Entrada: distância = 42 km, tempo = 4 horas. 
//Saída esperada: velocidade média = 10.5 km/h
    $distancia = $_POST["distancia"] ?? 0 ;
	$tempo = $_POST["tempo"] ?? 0 ;
	//fórmula da velocidade média =
	//vm = distância/tempo
	$vm = $distancia / $tempo;
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
			<h2>Resultado da velocidade média esperada</h2>
			<?php 
				echo " O {$distancia}m, com um tempo de {$tempo}h, sua velocidade média será de {$vm}km/h<br>";
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>