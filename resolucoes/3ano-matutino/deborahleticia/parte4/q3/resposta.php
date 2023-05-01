<?php

	$saborP = $_POST["saborP"] ?? "";
	$mensagem = "";

foreach($saborP as $s){ 
	$mensagem .= $s . "</br>";
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
		<h1>Formulário de Pizza</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo"> <?=$mensagem?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>