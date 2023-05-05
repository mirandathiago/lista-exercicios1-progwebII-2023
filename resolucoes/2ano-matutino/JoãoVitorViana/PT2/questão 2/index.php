<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Consumo de Energia Elétrica em KWH</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo de Eenergia</h2>
			<form action="resposta.php" method="post">

				<label>Informe o gasto em KWh:
					<input type="number" step="0.00" id="valor1" name="valor1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>