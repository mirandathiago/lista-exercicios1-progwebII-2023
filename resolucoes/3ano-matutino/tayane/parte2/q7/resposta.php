<?php
	$nome = $_POST["nome"] ?? 'João';
	$idade = $_POST["idade"] ?? 30;
	$peso = $_POST["peso"] ?? 70;
	$altura = $_POST["altura"] ?? 170;
	$genero = $_POST["genero"] ?? "Masculino";

	switch($genero){
		case "Masculino":
			$TMB = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
			break;
		case "Feminino":
			$TMB = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
			break;
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
		<h1>Calculadora da Taxa de Metabolismo Basal (TMB)</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Taxa de Metabolismo Basal (TMB)</h2>
			<p><?=$nome?>, a sua taxa de metabolismo basal (TMB) é de aproximadamente <?=number_format($TMB, 2, ",", ",")?> calorias por dia .</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>