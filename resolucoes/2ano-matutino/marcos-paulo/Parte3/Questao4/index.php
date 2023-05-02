<?php
/*
    Questão Número 24 da lista, Parte 3.

Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N.
Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for,
calcule a soma dos números de 1 a N.

Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15

*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Contagem até N</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action = "receber4.php" method = "get">

				<label>Insira o Numero
					<input type="number" name="numero" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>



