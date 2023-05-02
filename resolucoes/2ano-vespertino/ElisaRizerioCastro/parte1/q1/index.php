<!DOCTYPE html>
<!--Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
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
		<h2>Formulário de cálculo de descontos</h1>
		<!-- criei o form utilizando o método post e enviando  o preço informado para o php-->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<label>Informe o preço do produto:
					<input type="number" id="nome" name="valor" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>