<!DOCTYPE html>
<?php

$c = $_POST["celsius"] ; 
$f = ($c * 9/5) + 32;







?>
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
			<p>Resultado Calculado:</p>
			<p class="alerta-verde"><?php echo "o valor de celsius convertido para fahrenheit é de  {$f} °f"; ?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>