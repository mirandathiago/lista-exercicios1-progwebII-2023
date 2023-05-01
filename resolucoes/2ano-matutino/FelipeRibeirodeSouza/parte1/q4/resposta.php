<?php
	$distancia = $_POST["distancia"] ?? 1;
	$consumo = $_POST["consumo"] ?? 1;
	$combustivelnecessario = $distancia / $consumo;
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Quantidade de combustível</h2>
			<p>A quantidade de combustível para percorrer <?=$distancia?>Km é</p>
			<p class="alerta-vermelho"><?=$combustivelnecessario?> litro(s)</p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>