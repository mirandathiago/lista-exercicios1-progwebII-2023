<?php
/*4- Um motorista precisa saber a quantidade de combustível que será necessária para percorrer uma certa 
distância em seu carro, levando em conta o consumo médio de combustível. Crie um formulário que receba a
 distância a ser percorrida e o consumo médio de combustível do carro, e calcule a quantidade de combustível 
 necessária.
Entrada: Distância a percorrer: 200 km
Consumo médio de combustível: 10 km/l
Saída: Quantidade de combustível necessária: 20 litros
*/


?>






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
		<h1>Tanque de Combustivel</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calcule aqui o consumo de combustivel =D! </h2>
			<form action="resposta.php" method="post">
				<label>Distância a ser percorrida:
					<input type="number" id="dist" name="longe" required>
				</label>

				<label>Consumo médio de combustível:
					<input type="number" id="gasosa" name="combus" required>
				</label>

				<button name="enviar"> Enviar </button>
			
				<h2></h2>
			</form>
		</div>		
	</div>
</body>
</html>