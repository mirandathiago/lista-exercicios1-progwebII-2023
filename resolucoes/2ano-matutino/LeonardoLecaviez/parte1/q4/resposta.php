<?php
    $kmandados = $_GET["kmandados"] ?? 0;
    $consumomedio = $_GET["consumomedio"] ?? 0;

    $mediacombustivel = $kmandados / $consumomedio;

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
		<h1>Calculadora de Litros por KM</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
			
            <p>O consumo médio do carro e do combustível irá ser igual á: <?=$kmandados?> divididos por <?=$consumomedio?> 
                terá como média de litros utilizados <?=$mediacombustivel?> L / KM
            </p>
            
			<a href="consumopr.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>