<?php

$valor=$_GET["valor"] ?? 50;
$desconto=$valor-($valor*0.1);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Operadores Aritméticos</title>
</head>
<body>
<header>
	<h1>Desconto</h1>
</header>
	<div class="container">
		<div class="box formulario">
		    <h2>Desconto de 10%</h2>
            <h3> Com o desconto R$<?=$desconto?></h3>	
            <a href="index.php" class="link">Voltar</a>
		</div>		
	</div>
</body>
</html>