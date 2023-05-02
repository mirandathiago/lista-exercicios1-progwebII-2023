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
		<h1>Calculadora de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe consumo de energia elétrica em kWh (quilowatts-hora):</h2>
			<form action="resposta.php" method="post">
				<label>
					<input type="number" id="kwh" name="kwh" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>