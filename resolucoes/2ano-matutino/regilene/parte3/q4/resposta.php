<?php

	$numerointeiro = $_GET["numerointeiro"] ?? 00;
	$soma = $_GET["soma"] ?? 00;

	for($i=1; $i <= $numerointeiro; $i++){

		$soma = $soma + $i;

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
		<h1>número inteiro</h1>
	</header>

	<div class="container">
		<div class="box resposta">

			<h2>Resposta</h2>

			<p><?="A soma dos números de 1 a {$numerointeiro} = {$soma}: "?></p>
			
            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>
</body>
</html>