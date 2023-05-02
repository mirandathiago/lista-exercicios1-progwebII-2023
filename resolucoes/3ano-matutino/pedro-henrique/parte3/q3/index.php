<!--João deseja saber quantos números pares existem em um intervalo. 
Crie um formulário que permita ao usuário informar os dois números que 
delimitam o intervalo e, utilizando um laço de repetição do tipo for, 
calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6 -->


<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Numeros Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite o intervalo no numero para receber a quantidade de numero pares entre eles! </h2>
			<form action="receber1.php" method="get">
			<p>Digite o começo do intervalo:</p>
			<input type="number" name="comeco">
			<p>Aqui o Fim do intervalo:</p>
            <input type="number" name="fim">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>
