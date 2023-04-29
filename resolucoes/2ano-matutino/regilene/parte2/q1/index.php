<?php

	/*1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
	Entrada: 2 5 1
	Saída: Menor Número: 1 e o Maior Número: 5
	*/

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
		<h1>Formulário de Maior e Menor Número</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Digite três números:</h2>

			<form action="resposta.php" method="post">
				<label>Numero 1:
					<input type="number"  name="numero1" required> 

				<label>Numero 2:
					<input type="number"  name="numero2" required>
				</label>

				<label>Numero 3:
					<input type="number" name="numero3" required>
				</label>

				<button name="resposta.php"> Enviar </button>

			</form>
		</div>		
	</div>
</body>
</html>