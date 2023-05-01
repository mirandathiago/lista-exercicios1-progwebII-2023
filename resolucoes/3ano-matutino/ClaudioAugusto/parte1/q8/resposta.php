<?php
	
	$valor = $_POST["valor"] ?? "";
	$parcela = $_POST["parcela"] ?? "";
	$juros = 0.04;

	if ($parcela == 0) {
		$valorfinal = $valor;
	}else{
		$juros = $juros * $parcela;
		$adjuros = $valor *  $juros;
		$valorfinal = $valor + $adjuros;
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
		<h1>Magazine PHP</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor a pagar</h2>
			<p class="alerta-verde">R$<?=number_format($valorfinal, 2)?></p>
            <a href="index.php" class="link">Voltar</a>
			
		</div>
	</div>
</body>
</html>