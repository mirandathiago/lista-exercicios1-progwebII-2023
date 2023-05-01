
<!DOCTYPE html>

<!-- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela. 
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5 -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Verificador de Maior e Menor Numero</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite 3 números para verificar qual o maior e o menor entre eles </h2>
			<form action="receber1.php" method="get">
			<p>Primeiro Número:</p>
			<input type="number" name="num1">
			<p>Segundo Número:</p>
            <input type="number" name="num2">
			<p>Terceiro Número:</p>
            <input type="number" name="num3">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>