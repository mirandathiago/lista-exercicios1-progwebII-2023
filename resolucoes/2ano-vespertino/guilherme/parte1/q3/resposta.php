<?php

$nota1=$_GET["nota1"] ?? 5;
$nota2=$_GET["nota2"] ?? 5;
$nota3=$_GET["nota3"] ?? 5;

$media=(($nota1*2)+($nota2*3)+($nota3*5))/10;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>MÉDIA FINAL</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Média</h2>
			<p>A média do aluno foi de <?=$media?> pontos</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>