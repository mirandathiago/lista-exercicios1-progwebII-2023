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
			<?php

		If(!empty($dados['sendPorcentagem'])){
		//var_dump($dados);
		$valor_desconto = $valor_original / 50.00 * $dados['porcentagem'];
		echo "valor do desconto: " . number_format($valor_desconto, 2, ",", ".") . "<br><br>";

		$proud_com_desconto = $valor_original - $valor_desconto;
		
	$valor_original = 50.00;
	// $porcentagem = 10;

	echo "valor original do produto R$: " . number_format($valor_original, 2, ",", ".") . "<br><br>";

	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            ?>
	</div>
	</div>
</body>
</html>