<!DOCTYPE html>
<!--João irá comprar uma terreno para construir sua casa e para isso gostaria de calcular a área total desse terreno, crie um formulário que receba a largura e o comprimento do terreno, em seguida crie um código PHP que irá calcular esta área e exibir na tela.
Entrada: largura: 10m, comprimento: 20m
Saída esperada: 200m2 
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
		<h1>Formulário de Quantidade de combustível</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as seguintes questões</h2>
			<form action = "resposta.php" method="post">
				<label>Largura do terreno em m:
					<input type="number" id="largura" name="largura" step ="0.5" required>
				</label>

				<label>Comprimento do terreno em m:
					<input type="number" id="comprimento" name="comprimento" step ="0.5" required>
				</label>
		<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>