<!DOCTYPE html>
<!--crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5

-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para o maior número</h1>
		<!-- criei o form utilizando o método post e enviando  o preço informado para o php-->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<label>Informe o primeiro número:
					<input type="number" id="num1" name="n1" required>
				</label>
				<label>Informe o segundo número:
					<input type ="number" id="num2" name="n2" required> 
				</label>
				<label>Informe o terceiro número:
					<input type ="number" id="num3" name="n3" required> 
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>