<?php

	/*4- Um motorista precisa saber a quantidade de combustível que será necessária para percorrer uma certa distância em seu carro, levando em conta o consumo médio de combustível. Crie um formulário que receba a distância a ser percorrida e o consumo médio de combustível do carro, e calcule a quantidade de combustível necessária.

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
		<h1>Calculadora da quantidade de combustível</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Quantidade de combustível</h2>

			<form action="resposta.php" method="get">

				<label>Distância a ser Percorrida:
					<input type="number" name="distanciapercorrida" required>
				</label>

				<label>Consumo médio de combustível do carro:
					<input type="number" name="consumodocombustivel" required>
				</label>


				<button name="resposta.php"> Enviar </button>

			</form>
			
		</div>		
	</div>

</body>
</html>