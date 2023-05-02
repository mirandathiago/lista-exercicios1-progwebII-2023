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
			<h2>Informe os dados abaixo:</h2>
			<form action="resposta.php" method="post">
				<label>Altura:
					<input type="number" id="altura" name="altura" step="0.01" value="1.50" required>
				</label>

				<label>Peso:
					<input type="number" id="peso" name="peso" step="0.1" value="50" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>