<?php
	$energiaConsumida = $_POST["energia"];
	$valorConta = 0;

	if($energiaConsumida <= 40){
		$valorConta = 20;
	}else if($energiaConsumida <= 100){
		$valorConta = $energiaConsumida * 0.5;
	}else if($energiaConsumida > 100 && $energiaConsumida <= 200){
		$valorConta = $energiaConsumida * 0.7;
	}else if($energiaConsumida > 200){
		$valorConta = $energiaConsumida * 0.87;
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
		<h1>Formulário de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo">Quando o consumo de energia elétrica é <?=$energiaConsumida?>kWh o valor da conta é: <?=$valorConta?> reais </p>
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>