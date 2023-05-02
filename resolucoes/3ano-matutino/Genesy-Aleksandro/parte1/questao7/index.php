<?php

$C = $_POST["celsius"];
$F = $_POST["Fahrenheit"];

$F = ($C * 9/5) + 32;


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
		<h1>Estrutura de Repetição</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<form action="index.php"method="post">
    <label>Graus Celsius a ser convertido:
    <input type="number"  name="celsius" required>
    </label>
    <button>Enviar</button>

	<h2>
    Resultado da conversão:
</h2>

<h3>
    <?=$F?>
</h3>
  </form>


            
		</div>
	</div>
</body>
</html>
