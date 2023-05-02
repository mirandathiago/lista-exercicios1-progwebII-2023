<?php

	$num = $_POST["num"] ?? 0;
	$porcento = $num * 0.1;
	$result = $num - $porcento;
	
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<p>Preço com desconto de 10%: R$<?=$result?></p>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>