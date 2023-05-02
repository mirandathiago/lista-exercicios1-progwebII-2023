<?php
$nome = $_POST ["nome"] ?? "";
$peso = $_POST ["peso"] ?? "";
$altura = $_POST ["altura"] ?? "";
$sexo = $_POST ["sexo"] ?? "F" ;
$idade = $_POST ["idade"] ?? "";
switch($sexo){
	case "M":
		$tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
		$s = "Masculino";
			break;
	case "F":
		$tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
		$s = "Feminino";
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
		<h1>RESPOSTA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>CALCULO DE TMB</h2>
			
	<p class='alerta-amarelo'> <?=$nome?>, a sua taxa de metabolismo basal (TMB) é de aproximadamente <?=$tmb?> calorias por dia</p>
			
			
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>