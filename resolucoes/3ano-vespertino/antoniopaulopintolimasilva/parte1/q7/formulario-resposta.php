<?php
	$cel = $_GET["num"] ?? 20;	
	
	$f = ($cel * 9/5) + 32;
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
		<h1>Formulário de Conversor de Celsius para Fahrenheit</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="formulario-resposta.php" method="get">
				<label>Temperatura em Celsius:
					<input type="number" name="num" required value="<?=$cel?>">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Temperatura em Fahrenheit: <?=$f?>°</p>
		</div>
	</div>
</body>
</html>