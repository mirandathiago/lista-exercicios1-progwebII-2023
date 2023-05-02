<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Maior e Menor Número</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
				<label>Número 1:
					<input type="number" step="1" id="n1" name="n1" required>
				</label>

				<label>Número 2:
					<input type="number" step="1" id="n2" name="n2" required>
				</label>

				<label>Número 3:
					<input type="number" step="1" id="n3" name="n3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>