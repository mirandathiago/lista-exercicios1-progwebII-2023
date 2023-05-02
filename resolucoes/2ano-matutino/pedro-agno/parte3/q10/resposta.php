<?php

$num_linhas = $_GET['escada'];




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
			<p>A resposta será exibida aqui.</p>
			<p class="alerta-verde"><?php for($i = 1; $i <= $num_linhas; $i++){
	echo "$i";
	for($j= 1; $j <= $i; $j++){
		echo  "*";
	}
	echo "<br>";

} ?></p>
			
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>