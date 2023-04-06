<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>MÉDIA FINAL</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insíra as notas</h2>
			<form action="resposta.php" method="get">
				<label>Prova 1:
					<input type="number"  name="nota1" step="0.01" required>
				</label>
				<label>Prova 2:
					<input type="number"  name="nota2" step="0.01" required>
				</label>
				<label>Prova 3:
					<input type="number"  name="nota3" step="0.01" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>