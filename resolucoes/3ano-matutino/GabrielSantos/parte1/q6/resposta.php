<?php 

	/* 
	 * João irá comprar uma terreno para construir sua casa e para isso gostaria de calcular a área total desse terreno, crie um formulário que receba a largura e o comprimento do terreno, em seguida crie um código PHP que irá calcular esta área e exibir na tela.
	*/

	$largura = $_POST["largura"] ?? 1;
	$comprimento = $_POST["comprimento"] ?? 1;
	$area = $comprimento * $largura;
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
			<h2>Resposta</h2>
			<p><?="Largura do terreno: {$largura}m<br>
			 Comprimento do terreno: {$comprimento}m<br>
			 Área do terreno: {$area}m<sup>2</sup>"?></p>
			
            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>