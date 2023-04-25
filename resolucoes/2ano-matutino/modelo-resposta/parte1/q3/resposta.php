<?php
	$n1 = $_POST["n1"] ?? 0;
	$n2 = $_POST["n2"] ?? 0;
	$n3 = $_POST["n3"] ?? 0;

	$media = ($n1 + $n2 + $n3) / 3;
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
		<h1>Formulário de Media</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Média Final</h2>
			
			<p class="alerta-vermelho">A media foi de : <?=round($media, 2)?></p>
		
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>