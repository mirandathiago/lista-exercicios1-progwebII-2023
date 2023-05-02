<!DOCTYPE html>
<!-- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6
-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para descobrir quantidade de números pares em 1 intervalo</h1>
		<!-- criei o form utilizando o método post e enviando  o preço informado para o php-->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Intervalo numérico: </h2>
			<form action="resposta.php" method="post">
				<label>Informe o inicio do intervalo:
					<input type="number" id="num1" name="n1" required>
				</label>
				<label>Informe o fim do intervalo:
					<input type="number" id="num2" name="n2" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>