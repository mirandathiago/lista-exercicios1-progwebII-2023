<?php
	$valoremprestimo = $_POST["valoremprestimo"] ?? 5000;
	$numesesemprestimo = $_POST["numesesemprestimo"] ?? 12;

	// Fórmula de Juros Compostos: M (Montante) = P (Capital) * (1 + i [Taxa de juros]) ^ n (Tempo de aplicação)
	$valortotal = $valoremprestimo * (1 + 0.025) ** $numesesemprestimo;

	$status = "R$ " . number_format($valortotal, 2, ".", ","); 
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
		<h1>Formulário de Empréstimo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor total a ser pago: </h2>
			<p><?=$status?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>