<?php

	$consumo = $_POST["consumo"] ?? "";

	if ($consumo <= 100) {
		$preco = $consumo * 0.5;
		
	}else if ($consumo > 101 && $consumo <= 200 ) { 
		$preco = $consumo * 0.70;
		
	}else{
		$preco = $consumo * 0.87;
		
	}

	if ($preco < 20) {
		$preco =20;
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
		<h1>Consulta - Consumo de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Conta de Energia</h2>
			<p class="alerta-vermelho">Valor da conta de energia: R$<?=$preco?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>