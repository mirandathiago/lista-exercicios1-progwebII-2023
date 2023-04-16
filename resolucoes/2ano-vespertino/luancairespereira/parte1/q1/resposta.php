<?php
	$preco = $_POST["preco"]??0;
	$desconto = 0.01;
	$precofinal = $preco * $desconto;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de cálculo de desconto de 10%</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Preços finais</h2>
			<p>o Valor de entrada R$<?php $preco?> com o desconto de <?php $desconto?> ficará no valor de <?php $precofinal?>.</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>