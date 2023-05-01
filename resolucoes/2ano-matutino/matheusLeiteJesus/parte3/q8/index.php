
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
		<h1>Formulário de Crescimento Populacional</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cidades:</h2>
			<form action="resposta.php" method="get">
				
				<label>População atual da cidade A:
					<input type="number" id="popa" name="popa" required>
				</label>
				<label>Taxa de crescimento da população A (%):
					<input type="number" id="cresca" name="cresca" step="0.1"  required>
				</label>
				<label>População atual da cidade B:
					<input type="number" id="popb" name="popb" required>
				</label>
				<label>Taxa de crescimento da população B (%):
					<input type="number" id="crescb" name="crescb" step="0.1"  required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>