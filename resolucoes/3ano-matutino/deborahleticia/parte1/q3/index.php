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
		<h1>Formulário de Média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informações referentes ao aluno:</h2>
			<form action="resposta.php" method="post">
				<label>Nome do aluno:
					<input type="text" name="nome" required>
				</label>

				<label>Nota 1:
					<input type="number" name="nota1" min="0" max="10" step="0.1" required>
				</label>

				<label>Nota 2:
					<input type="number" name="nota2" min="0" max="10" step="0.1" required>
				</label>

				<label>Nota 3:
					<input type="number" name="nota3" min="0" max="10" step="0.1" required>
				</label>
				
				<button name="enviar">Enviar</button>
			</form>
		</div>		
	</div>
</body>
</html>