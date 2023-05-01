<!DOCTYPE html>
<!--  Um motorista precisa saber a quantidade de combustível que será necessária para percorrer uma certa distância em seu carro, levando em conta o consumo médio de combustível. Crie um formulário que receba a distância a ser percorrida e o consumo médio de combustível do carro, e calcule a quantidade de combustível necessária.
Entrada: Distância a percorrer: 200 km
Consumo médio de combustível: 10 km/l
Saída: Quantidade de combustível necessária: 20 litros
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
		<h1>Formulário de Quantidade de combustível</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as seguintes questões</h2>
			<form action = "resposta.php" method="post">
				<label>Distância a percorrer em km:
					<input type="number" id="distancia" name="distancia" value="10"  required>
				</label>

				<label>Consumo médio de Combustível em litros:
					<input type="number" id="consumo" name="consumo" value= "12" required>
				</label>
		<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>