<?php

	$kwh = $_POST["kwh"] ?? 100;
	$valorDaConta = 0;

	if($kwh <= 100)
		$valorDaConta = $kwh * .5;
	if($kwh <= 200)
		$valorDaConta = $kwh * .7;
	else
		$valorDaConta = $kwh * .87;

	if ($valorDaConta < 20)
		$valorDaConta = 20;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Conta de Energia</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Conta de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde">Valor da Conta: R$ <?= number_format($valorDaConta, 2, ",", ".") ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>