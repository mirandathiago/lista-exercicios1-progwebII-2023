<?php

$divida=$_POST["divida"];
$juros=$_POST["juros"];
$valorPago=$_POST["dinheiroDeCadaMes"];
$contador=0;
$juros=($juros/100)+1;

while($divida>0){
	$divida=$divida-$valorPago;
	$contador++;
	$divida=$divida*$juros;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>DÍVIDA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Quitação</h2>
			<p>A quantidade de meses necessários para quitar a divida é de <?=$contador?> meses.</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>