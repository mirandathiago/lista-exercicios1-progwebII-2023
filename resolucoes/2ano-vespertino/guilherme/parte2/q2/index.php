<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>CONTA DE ENERGIA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo de energia</h2>
			<form action="resposta.php" method="post">
				<label>Insira o cosumo de energia elétrica em kWh (quilowatts-hora):
					<input type="number"  name="kwh" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>