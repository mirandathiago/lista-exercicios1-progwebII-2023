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
		<h1>Calculadora de Cédulas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Valor:</h2>
			<form action="calculodinheiro.php" method="get">
				<label>Informe um Valor (R$):
					<input type="number" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>