<?php
		$valorp = $_POST["valor"] ;
		$nmeses = $_POST["nmeses"];
		
		$taxa = 0.025;
	
		$valortotal = $valorp * ((1 + $taxa) ** $nmeses);

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
		<h1>Formulário de Empréstimo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado da consulta</h2>
			<p class="alerta-amarelo" >Valor total a ser pago: R$<?=number_format($valortotal, 2)?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>