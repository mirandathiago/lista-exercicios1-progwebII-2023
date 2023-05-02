<!DOCTYPE html>
<!-- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15
-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para descobrir o resultado da soma de 1 a n</h1>
		<!-- criei o form utilizando o método post e enviando  o preço informado para o php-->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="resposta.php" method="post">
				<label>Informe o valor de N:
					<input type="number" id="n" name="num" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>