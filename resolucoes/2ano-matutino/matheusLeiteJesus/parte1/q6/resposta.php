<?php

	$largura = $_POST["largura"] ?? 0;
	$comprimento = $_POST["comprimento"] ?? 0;

	$area = $largura * $comprimento;

/*João irá comprar uma terreno para construir sua casa e para isso gostaria de calcular a área total desse terreno, crie um formulário que receba a largura e o comprimento do terreno, em seguida crie um código PHP que irá calcular esta área e exibir na tela.
Entrada: largura: 10m, comprimento: 20m
Saída esperada: 200m2*/

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
		<h1>Formulário da Área do terreno</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde">A área do terreno é de <?=$area?>m².</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>