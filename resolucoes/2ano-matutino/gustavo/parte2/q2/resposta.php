<?php

	$n = $_POST["kwh"] ?? 0;

	if($n <= 40){
		$vl = 20;
	}else if($n <= 100){
		$vl = $n * 0.50 + 20;
	}else if($n > 100 && $n <= 200){
		$vl = $n * 0.70 + 20;
	}else{
		$vl = $n * 0.87 + 20;
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
		<h1>Formulário de Pagamento</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>O valor a ser pago er de:</h2>
			<p class="alerta-vermelho"> R$<?=$vl?></p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>