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
		<h1>Qual o maior e qual o menor?</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira valores</h2>
			<form action="resposta.php" method="get">
				<label>Numero 1:
					<input type="number" id="num1" name="num1" required>
				</label>
				<label>Numero 2:
					<input type="number" id="num2" name="num2" required>
				</label>
				<label>Numero 3:
					<input type="number" id="num3" name="num3" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>