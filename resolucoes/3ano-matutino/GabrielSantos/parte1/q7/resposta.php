<?php

 /* 
  * Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
 */
	$celsius = $_POST["celsius"];
	$fahrenheit = ($celsius * 1.8) + 32;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?="{$celsius}°C equivale a {$fahrenheit}°F."?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>