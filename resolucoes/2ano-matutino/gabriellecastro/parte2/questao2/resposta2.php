<?php

	$n = $_POST["kwh"] ?? 0;

	if($n <= 40){
		$valor = 20;
	}else if($n <= 100){
		$valor = $n * 0.50 + 20;
	}else if($n > 100 && $n <= 200){
		$valor = $n * 0.70 + 20;
	}else{
		$valor = $n * 0.87 + 20;
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<header>
		<h1>Formulário de Pagamento</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>O valor a ser pago é: </h2>
			<p class="alerta-vermelho"> R$<?=$valor?></p>
            <a href="questao2.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>