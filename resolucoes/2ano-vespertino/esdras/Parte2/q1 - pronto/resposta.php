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
		<h1>Maior e Menor</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$num1 = $_POST["num1"] ?? 0;
				$num2 = $_POST["num2"] ?? 0;
				$num3 = $_POST["num3"] ?? 0;

				if($num1 < $num2 && $num1 < $num3){
					$menor = $num1;
				}
				if($num2 < $num1 && $num2 < $num3){
					$menor = $num2;
				}
				if($num3 < $num1 && $num3 < $num2){
					$menor = $num3;
				}
				if($num1 > $num2 && $num1 > $num3){
					$maior = $num1;
				}
				if($num2 > $num1 && $num2 > $num3){
					$maior = $num2;
				}
				if($num3 > $num1 && $num3 > $num2){
					$maior = $num3;
				}
				if($num1 == $num2 && $num1 == $num3){
					$menor = $num1;
					$maior = $num1;
				}
				if($num1 == $num2 && $num1 < $num3){
					$menor = $num1;
					$maior = $num3;
				}
				if($num2 == $num3 && $num2 < $num1){
					$menor = $num2;
					$maior = $num1;					
				}

			?>

			<?="<h2>Maior Número: {$maior}<br>Menor Número: {$menor}</h2>"?>

			<a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>