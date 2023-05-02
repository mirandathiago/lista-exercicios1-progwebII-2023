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
		<h1>Calculadora de kWh (quilowatts-hora)</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Quilowatts - Hora Consumidos</h2>
			<form action="calculoCE.php" method="get">
				<label>Valor da Energia em kWh (quilowatts-hora):
					<input type="number" name="kwhenergia" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>