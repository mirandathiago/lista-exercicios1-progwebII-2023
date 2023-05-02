<?php
/*
    Questão Número 21 da lista, Parte 3.

Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação
utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28

*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            
			<form action = "receber2.php" method = "get">
				<label>Insira o valor para ter sua tabuada calculada:
					<input type="number" name="numero" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>