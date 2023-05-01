<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Soma de Números</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma de Números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha o Campo Abaixo</h2>
			<form action="resposta.php" method="post">
				<label>Número:
					<input type="number" step="1" id="valor" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>