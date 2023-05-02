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

				if($num1 < $num2 && $num1 < $num3){//verificação se o primeiro número é menor que os outros
					$menor = $num1;
				}
				if($num2 < $num1 && $num2 < $num3){//verificação se o segundo número é menor que os outros
					$menor = $num2;
				}
				if($num3 < $num1 && $num3 < $num2){//verificação se o terceiro número é menor que os outros
					$menor = $num3;
				}
				if($num1 > $num2 && $num1 > $num3){//verificação se o primeiro número é maior que os outros
					$maior = $num1;
				}
				if($num2 > $num1 && $num2 > $num3){//verificação se o segundo número é maior que os outros
					$maior = $num2;
				}
				if($num3 > $num1 && $num3 > $num2){//verificação se o terceiro número é maior que os outros
					$maior = $num3;
				}
				if($num1 == $num2 && $num1 == $num3){//verificação se todos os números possuem o mesmo valor
					$menor = $num1;
					$maior = $num1;
				}
				if($num1 == $num2 && $num1 < $num3){//verificação se o primeiro e segundo número são iguais, e menores que o terceiro
					$menor = $num1;
					$maior = $num3;
				}
				if($num2 == $num3 && $num2 < $num1){//verificação se o segundo número é igual o terceiro e menor que o primeiro
					$menor = $num2;
					$maior = $num1;					
				}

			?>

			<?="<h2>O maior número é: {$maior}<br>O menor numero é: {$menor}</h2>"?>

			<a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>