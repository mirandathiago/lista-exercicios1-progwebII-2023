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
		<h1>Questão 4 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>4- Um motorista precisa saber a quantidade de combustível que será necessária para percorrer uma certa distância em seu carro, levando em conta o consumo médio de combustível. Crie um formulário que receba a distância a ser percorrida e o consumo médio de combustível do carro, e calcule a quantidade de combustível necessária.</h2>
			
			<form action="resposta.php" method="get">
				<label>Distância a ser Percorrida:
					<input type="number" id="distancia" name="distancia" required>
				</label>

				<label>Consumo do Veículo (km/l):
					<input type="number" id="consumo" name="consumo" required step="0.1">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>