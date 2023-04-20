<!DOCTYPE html>
<!--  Um atleta de corrida de rua está treinando para uma maratona. Ele correu 10 km em 45 minutos no primeiro dia e quer aumentar sua velocidade para conseguir completar a maratona em menos de 4 horas. Crie um formulário que receba a distância que ele quer percorrer e o tempo que ele quer completar a prova e calcule a velocidade média que ele precisa atingir em km/h usando PHP. 
Exemplo:
Entrada: distância = 42 km, tempo = 4 horas. 
Saída esperada: velocidade média = 10.5 km/h.
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
				<label>Distância a percorrer em km:
					<input type="number" id="distancia" name="distancia" required>
				</label>

				<label>Tempo estimado em horas:
					<input type="number" id="tempo" name="tempo" required>
				</label>
		<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>