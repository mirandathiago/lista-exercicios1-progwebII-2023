<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="box formulario">
			<h2>Intervalo de números</h2>
			<form action="receber.php" method="post">
				<label>Digite um número para iniciar o intervalo:
					<input type="number" id="numero1" name="numero1" required>
				</label>
				<label>Digite um número para finalizar o intervalo:
					<input type="number" id="numero2" name="numero2" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>