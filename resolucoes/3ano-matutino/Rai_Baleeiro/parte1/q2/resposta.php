<?php

$num = $_POST["numero"];

$div = $num/2;
$multi = $num*2;
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
		<h1>Formulário de Divisao e multiplicacao de numeros</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?=$num?> multiplicado por 2 é igual a <?=$multi?> e dividido por 2 é igual a <?=$div?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>