<?php
/*3- João deseja saber quantos números pares existem em um intervalo. 
Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, 
utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15


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
		<h1>Contador</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Quantos números pares temos?</h2>
			<form action="resposta.php" method="post">
				<label>Número inicial
					<input type="number" name="num1" required>
				</label>

				<label>Número final
					<input type="number" name="num2" required>
				</label>



				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>