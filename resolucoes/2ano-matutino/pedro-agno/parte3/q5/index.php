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
		<h1>Descomplica Dividas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe:</h2>
			<form action="resposta.php" method="POST">
				<label>                              conta:
				<input type="number" id="nome" name="conta" required>taxa:
				<input type="number" id="nome" name="taxa" required>mensal:
				<input type="number" id="nome" name="mensal" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>