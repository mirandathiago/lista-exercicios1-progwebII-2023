<!-- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5-->

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma Numero</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite o número para saber qual é o resultado da soma dos números de 1 até ele! </h2>
			<form action="receber1.php" method="get">
			<p>Digite o começo do intervalo:</p>
			<input type="number" name="numero">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>