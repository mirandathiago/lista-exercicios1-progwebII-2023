<?php

	if(isset($_POST['enviar'])) {
		$preco_original = $_POST['valor'];
		$preco_final = $preco_original - ($preco_original * 0.1); // Desconto de 10%
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Preço com Desconto</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Preço com Desconto</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor com Desconto</h2>
			<p class="alerta-verde">Preço com desconto: R$ <?= number_format($preco_final, 2, ',', '.'); ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>