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
		<h1>Calculadora de Mádia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de notas</h2>
			<form action="resposta.php" method="post">
				
				<label>Nota da Primeira Prova:
					<input type="number"  name="nota1" min="0" step="0.1" required>
				</label>

				<label>Nota da Segunda Prova:
					<input type="number"  name="nota2" min="0" step="0.1" required>
				</label>

				<label>Nota da Terceira Prova:
					<input type="number"  name="nota3" min="0" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>