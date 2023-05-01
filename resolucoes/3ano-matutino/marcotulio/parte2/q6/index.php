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
		<h1>Calculadora de Triângulos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de Triângulos</h2>
			<form action="resposta.php" method="post">
				<label>Lado 1:
					<input type="number" id="lado1" name="lado1" required>
				</label>

				<label>Lado 2:
					<input type="number" id="lado2" name="lado2" required>
				</label>

				<label>Lado 3:
					<input type="number" id="lado3" name="lado3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>