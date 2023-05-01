<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fatorial</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite um número</h2>
			<form action="resposta.php" method="post">
				<label>Valor:
					<input type="number" step="1" id="valor" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>