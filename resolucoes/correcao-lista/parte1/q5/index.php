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
		<h1>Questão 5 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>5- Um atleta de corrida de rua está treinando para uma maratona. Ele correu 10 km em 45 minutos no primeiro dia e quer aumentar sua velocidade para conseguir completar a maratona em menos de 4 horas. Crie um formulário que receba a distância que ele quer percorrer e o tempo que ele quer completar a prova e calcule a velocidade média que ele precisa atingir em km/h usando PHP. </h2>
			<form action="index.php" method="post">
				<label>Distância:
					<input type="number" id="distancia" name="distancia" required>
				</label>

				<label>Tempo:
					<input type="number" id="tempo" name="tempo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){

					$distancia = $_POST["distancia"] ?? 0;
					$tempo = $_POST["tempo"] ?? 0;

					$velocidade = $distancia / $tempo;

					echo "<p>A velocidade média precisa ser de {$velocidade}km/h para percorrer uma distância de {$distancia}km no tempo de {$tempo}h</p>";

				}

				


			?>


		</div>
	</div>
</body>
</html>