<?php

$nome=$_POST["nome"];
$peso=$_POST["peso"];
$altura=$_POST["altura"];
$idade=$_POST["idade"];
$genero=$_POST["genero"];

switch($genero){
    case 'M':
        $TMB = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
        break;
    case 'F':
        $TMB = 447.6 + (9.2* $peso) + (3.1 * $altura) - (4.3* $idade);
        break;
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 7</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>TAXA DE BASAL</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
			<p><?=$nome?> sua taxa de metabolismo basal (TMB) é de aproximadamente <?=$TMB?> calorias por dia.</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>