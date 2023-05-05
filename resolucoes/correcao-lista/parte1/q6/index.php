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
		<h1>Questão 6 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>6- João irá comprar uma terreno para construir sua casa e para isso gostaria de calcular a área total desse terreno, crie um formulário que receba a largura e o comprimento do terreno, em seguida crie um código PHP que irá calcular esta área e exibir na tela.</h2>
			
			<form action="resposta.php" method="get">
				<label>Largura:
					<input type="number" id="largura" name="largura" required>
				</label>

				<label>Comprimento:
					<input type="number" id="comprimento" name="comprimento" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>