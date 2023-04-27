<?php

	$numero = $_POST["numero"] ?? "";
	$somaN = 0;

	for($i=1; $i<=$numero; $i++){
		$somaN = $somaN + $i;
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
		<h1>Formulário de Soma</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada</h2>
			
			<p class="alerta-amarelo"> A soma é: <?=$somaN?></p>
			
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>