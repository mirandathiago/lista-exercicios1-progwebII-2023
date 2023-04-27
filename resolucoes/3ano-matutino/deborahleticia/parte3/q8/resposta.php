<?php

	$populacaoA = $_POST["populacaoA"];
	$populacaoB = $_POST["populacaoB"];
	$txA = $_POST["txA"];
	$txB = $_POST["txB"];
	$quantAnos = 0;

	if($populacaoA > $populacaoB){
		$mensagem = "A população da cidade A já é maior que a população da cidade B";
	}else if($txA < $txB){
		$mensagem ="A cidade A não alcançará a quantidade de habitantes da cidade B em razão da baixa taxa de crescimento anual";
	}
	else{
		while($populacaoA <= $populacaoB){
			$populacaoA += $populacaoA * ($txA / 100);
			$populacaoB += $populacaoB * ($txB / 100);
			$quantAnos++;
		}
		$mensagem = "A quantidade de anos necessária para que a população da cidade A ultrapasse a população da cidade B é de $quantAnos anos e a população da cidade A no fim desse período é de $populacaoA habitantes, enquanto que da cidade B é de $populacaoB habitantes ";
	}
	
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
		<h1>Formulário da cidade A e B</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Quantidade de anos necessária e população final</h2>
			<p class="alerta-amarelo"> <?=$mensagem?> </p>
			
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>