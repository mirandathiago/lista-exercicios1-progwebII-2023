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
		<h1>Ambiente ideal para o clima</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Como está o clima na sua cidade?</h2>
		<form action="receber.php" method="get">
					<select name="clima">
						<option></option>
						<option value="Ensolarado">Ensolarado</option>
						<option value="Ameno">Ameno</option>
						<option value="Nublado">Nublado</option>
						<option value="Chuvoso">Chuvoso</option>
						<option value="Tempestuoso">Tempestuoso</option>
					</select>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>