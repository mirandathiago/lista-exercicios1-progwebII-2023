<?php
	$consumo = $_POST["energia"];
	$valorConta = 0;

	if($consumo <= 0){
		$valorConta = 20;
	}else if($consumo <= 100){
		$valorConta = $consumo * 0.50;
	}else if($consumo > 100 && $consumo <= 200){
		$valorConta = $consumo * 0.70;
	}else if($consumo > 200){
		$valorConta = $consumo * 0.87;
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
			<p class="alerta-amarelo">Quando o consumo de energia elétrica é <?=$consumo?>kWh o valor da conta é: <?=$valorConta?> reais </p>
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>