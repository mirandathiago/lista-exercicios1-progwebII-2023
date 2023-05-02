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
		<h1>Calculadora de Crescimento Populacional</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados:</h2>
			<form action="recebercalculoCP.php" method="post">
				<label>População da cidade A:
					<input type="number" name="cidadea" required>
				</label>

				<label>Taxa de crescimento (%):
					<input type="number" name="taxacresca" required>
				</label>

                <label>População da cidade B:
					<input type="number" name="cidadeb" required>
				</label>

				<label>Taxa de crescimento (%):
					<input type="number" name="taxacrescb" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>