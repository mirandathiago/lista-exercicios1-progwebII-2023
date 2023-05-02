<?php

$preco=$_GET["preco"] ?? 50;
$desconto=$preco-($preco*0.1);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
    <title>Questão 1</title>
</head>
<body>
<header>
	<h1>Desconto</h1>
</header>
	<div class="container">
		<div class="box formulario">
		    <h2>Desconto de 10%</h2>
            <h3>O preço do produto com o desconto é de R$<?=$desconto?></h3>	
            <a href="index.php" class="link">Voltar</a>
		</div>		
	</div>
</body>
</html>