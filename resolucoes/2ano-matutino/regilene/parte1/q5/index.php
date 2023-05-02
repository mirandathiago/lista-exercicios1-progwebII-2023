<?php

	/*5- Um atleta de corrida de rua está treinando para uma maratona. Ele correu 10 km em 45 minutos no primeiro dia e quer aumentar sua velocidade para conseguir completar a maratona em menos de 4 horas. Crie um formulário que receba a distância que ele quer percorrer e o tempo que ele quer completar a prova e calcule a velocidade média que ele precisa atingir em km/h usando PHP. 
	Exemplo:
	Entrada: distância = 42 km, tempo = 4 horas. 
	Saída esperada: velocidade média = 10.5 km/h.
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
		<h1>Calculadora da velocidade média</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Quantidade da velocidade média</h2>

			<form action="resposta.php" method="get">

				<label>Distância em que quer Percorrer:
					<input type="number" name="distanciaquepercorre" required>
				</label>

				<label>O tempo que quer completar:
					<input type="number" name="tempoquecompleta" required>
				</label>

				<button name="resposta.php"> Enviar </button>

			</form>
		</div>		
	</div>
</body>
</html>