<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<div class="container">
		<div class="box formulario">
			<h2>Saudação</h2>
			<form action="receber.php" method="post">
				<label>Qual o seu nome?
					<input type="text" id="nome" name="nome"required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>