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
		<h1>Equação de 2° Grau com fórmula de Bhaskara</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe:</h2>
			<form action="resposta.php" method="post">
				<label>O valor de A:
					<input type="number" id="a" name="a" required>
				</label>

				<label>O valor de B:
					<input type="number" id="b" name="b" required>
				</label>

				<label>O valor de C:
					<input type="number" id="c" name="c" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>		
	</div>
</body>
</html>