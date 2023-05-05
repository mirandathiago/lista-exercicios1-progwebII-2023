<?php

   $valor = $_POST["valor"] ?? 0;
   $desconto = $valor * 0.1; 
   $novovalor = $valor - $desconto;

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
		<h1>Questão 1 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Questão 1</h2>
			
			<p class="alerta-verde">O valor do produto é de R$<?=$valor?> e com o desconto de  R$<?=$desconto?> ficou por R$<?=$novovalor?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>