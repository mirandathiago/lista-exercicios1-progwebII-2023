<?php
/*Joãozinho está estudando matemática e precisa saber qual é o
 resultado da soma dos números de 1 a N. Crie um formulário que
  permita ao usuário informar um número inteiro N e, utilizando 
  um laço de repetição do tipo for, calcule a soma dos números de 1 a N.

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
		<h1>SOMA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Soma de 1 até N</h2>
			<form action="resposta.php" method="post">
				<label>Insira um número:
					<input type="number"  name="num" required>
				</label>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>