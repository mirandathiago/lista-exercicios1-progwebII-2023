<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>FormulárioQ5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de velocidade para maratona</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="resposta.php" method="post">
				<label>Informe a distância que deseja percorrer:
					<input type="number" id="distancia" name="distancia" required>
				</label>

				<label>Informe tempo que deseja percorrer:
					<input type="number" id="tempo" name="tempo" step="0.01" min="0.01" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>