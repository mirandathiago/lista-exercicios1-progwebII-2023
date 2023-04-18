
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
		<h1>Média da unidade</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite as notas do aluno:</h2>
			<form action = "resposta.php" method = "get">
				<label>Nota 1: 
					<input type="number" id="nota" name="n1" required step="0.1" value="6">
				</label>

				<label>Nota 2:
					<input type="number" id="nota" name="n2" required step="0.1" value="6">
				</label>

				<label>Nota 3:
					<input type="number" id="nota" name="n3" required step="0.1" value="6">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>