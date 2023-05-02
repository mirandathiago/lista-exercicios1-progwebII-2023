<?php

$nota1 = $_POST ["nota1"] ?? 0;
$nota2 = $_POST ["nota2"] ?? 0;
$nota3 = $_POST ["nota3"] ?? 0;

$peso1 = 2;
$peso2 = 3;
$peso3 = 5;

// Fórmula da Média Ponderada -> Mp = [(N1 x P1) + (N2 x P2) + (N3 x P3) + ... (Nx x Px)] ÷ (P1 + P2 + P3 + ... Px).
$Mp = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3))/($peso1 + $peso2 + $peso3);
$mediafinal = number_format($Mp, 2, ",", ",")

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
		<h1>Calculadora de Mádia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Fórmulario de Média Ponderada</h2>
	
			<p> Saída: Média Final: <?=$mediafinal?> </p>
		
            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>
</body>
</html>