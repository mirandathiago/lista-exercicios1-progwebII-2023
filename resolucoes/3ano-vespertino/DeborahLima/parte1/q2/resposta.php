<?php
	$numero = $POST["num"] ?? 2;

	$dobro = $numero * 2;
	$metade = $numero / 2;
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
		<h1>Formulário Número</h1>
	</header>

	<div class="container">
		<div class="box resposta">
			<h2>Número escolhido: <?=$numero?></h2>
			<p>Dobro: <?=$dobro?> <br>Metade: <?=$metade?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>

</body>
</html>