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
		<h1>Verificador Números Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados:</h2>
			<form action="calculopar.php" method="post">
				<label>Número Inicial:
					<input type="number" name="numero" required>
				</label>

				<label>Número de Parada:
					<input type="number" name="parada" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>