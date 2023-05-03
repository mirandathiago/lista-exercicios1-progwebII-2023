<?php
  $nome = $_POST["nome"] ?? " ";
  $primeiranota = $_POST["primeiranota"];
  $segundanota = $_POST["segundanota"];
  $terceiranota = $_POST["terceiranota"];

  $peso1 = 2;
  $peso2 = 3;
  $peso3 = 5;

  $mediafinal = ($primeiranota * $peso1) + ($segundanota * $peso2) + ($terceiranota * $peso3) / ($peso1 + $peso2 + $peso3);

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<h3>Nome: <?=$nome?> - Média: <?=$mediafinal?></h3>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>