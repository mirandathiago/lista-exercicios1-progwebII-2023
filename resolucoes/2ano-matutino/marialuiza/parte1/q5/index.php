<?php

		$distancia = $_POST["distancia"] ?? 1;
		$tempo = $_POST["tempo"] ?? 1;

		$velocidademedia = $distancia / $tempo;


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
		<h1>Questao 5</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="post">
				
				<label>Distância:
					<input type="number" name="distancia" required>
				</label>
				<label>Tempo:
					<input type="number" name="tempo" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>a velocidade média que ele precisa atingir é de <?=$velocidademedia?>km/h </p>
			
		</div>
	</div>
</body>
</html>



