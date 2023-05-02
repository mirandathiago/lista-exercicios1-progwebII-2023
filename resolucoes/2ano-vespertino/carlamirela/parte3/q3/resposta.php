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
		<h1>porcentagem</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
	<?php

	$num1 = $POST_['num1'];
	$num2 = $POST_['num2'];


	for($i=2; $i<100; $i++){
		echo"Os numeros pares sao:{$i} . <br>";
	}
	?>
	</div>
	</div>
</body>
</html>