<?php

	$precoproduto = $_POST["precoproduto"] ?? 0;
	
	$desconto = $precoproduto * 0.9;


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
		<h1>Formulário de Desconto</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Preço com Desconto:</h2>
			<p class="alerta-vermelho">O preço do produto q era <?=$precoproduto?> com desconto de 10% fica: <?=$desconto?></p>
            <a href="questao1.php" class="link">Voltar</a>
		</div>
	</div>
</body>