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
		<h1>Calculadora de IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe seus dados:</h2>
			<form action="receber.php" method="post">
				<label>Peso (kg):
					<input type="number" step="00.1" id="peso" name="peso" required>
				</label>

				<label>Altura (m):
					<input type="number" step="0.01" id="altura" name="altura" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>