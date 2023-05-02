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
			<h2>Qual dos 3 Númeors Indicados é Maior</h2>
			<form action="resposta.php" method="post">

				<label>Informe o primeiro número:
					<input type="number" id="valor1" name="valor1" required>
				</label>

				<label>Informe o segundo número:
					<input type="number" id="valor2" name="valor2" required>
				</label>

				<label>Informe o terceiro número:
					<input type="number" id="valor3" name="valor3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>