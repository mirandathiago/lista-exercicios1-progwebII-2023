<?php
// Entrada: largura: 10m, comprimento: 20m
//Saída esperada: 200m2 
    $largura = $_POST["largura"] ?? 0 ;
	$comprimento = $_POST["comprimento"] ?? 0 ;
	//fórmula de área é igual base*altura(largura *comprimento)
	//A = b*h
	$a = $largura * $comprimento;
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
				echo " O terreno de comprimento {$comprimento}m, com uma largura de {$largura}m, sua área será de {$a}m²<br>";
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>