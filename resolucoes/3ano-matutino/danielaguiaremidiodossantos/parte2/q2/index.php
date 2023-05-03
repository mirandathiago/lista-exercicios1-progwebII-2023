<?php

    $kwh = $_POST ["khw"]?? 100;
    $valorDaConta = 237.50;

    if($kwh <= 101)
		$valor = $kwh * 0.50;
	if($kwh <= 200)
		$valor = $kwh * 0.70;
	else
		$valor = $kwh * 0.87;

	if ($valor < 300)
		$valor = 20;


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family"Audiowide|Sofia|Trirong rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index2.css">
    <title>conta de energia</title>
</head>
<body>

<header>
		<h1>conta de energia</h1>
</header>
	<div class="container">
		<div class="box resposta">
			<h2>resposta</h2>
			<p class="alerta-verde">valor: R$ <?= number_format($valorDaConta, 20,",", ".") ?></p>
            <a href="index2.php" class="link"><a>volta o incio</a>
		</div>
	</div>
    
</body>
</html>