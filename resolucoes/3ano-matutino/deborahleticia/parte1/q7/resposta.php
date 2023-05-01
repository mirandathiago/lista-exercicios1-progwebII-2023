<?php 
	$temperaturaC = $_POST["temperaturaC"];
	$temperaturaF = ($temperaturaC * 9/5) + 32;
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
		<h1>Formulário de Temperatura</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo">A temperatura em graus Celsius é <?=$temperaturaC?> graus e convertida para Fahrenheit é equivalente a <?=$temperaturaF?> graus</p>
            <a href="index.php" class="link">Voltar à página inicial.</a>
		</div>
	</div>
</body>
</html>