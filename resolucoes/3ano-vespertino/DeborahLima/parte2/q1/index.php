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
		<h1>Maior e Menor</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite os números</h2>
			<form action = "resposta.php" method = "get">
				<label>Número 1:
					<input type="number" name="num1" required>
				</label>

				<label>Número 2:
					<input type="number" name="num2" required>
				</label>

				<label>Número 3:
					<input type="number" name="num3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>