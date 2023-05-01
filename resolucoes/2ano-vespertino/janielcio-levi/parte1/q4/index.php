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
		<h1>Gasto de gasolina</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Qual foi a sua viagem?</h2>
			<form action="index.php" method="post">
				<label>Quantos quilometros voçê irá pecorrer?
					<input type="number" id="km" name="klmt" required><!--kmlt = quilometros-->
				</label>

				<label>Gasto por quilometro:
					<input type="number" id="gasto" name="gaspl" required><!--gaspl = gasto por litro-->
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Gasolina Gasta</h2>
			<?php

				if ($_SERVER["REQUEST_METHOD"]=="POST") {
					$distancia = $_POST["klmt"];
					$gasto = $_POST["gaspl"];
					$qtdg = $distancia/$gasto;//qtdg = quantidade de gasolina
					echo "<p class='alerta-amarelo'>Sabendo que a sua viagem será de {$distancia}<sub>Km</sub>, e o seu carro gasta {$gasto}<sub>Km/l</sub>, será necessario ter {$qtdg} Litros de gasolina para chegar ao seu destino!</p>";
				}

			?>
		</div>
	</div>
</body>
</html>