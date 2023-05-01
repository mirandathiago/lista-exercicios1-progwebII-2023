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
		<h1>Soma do Número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Diga um número e lhe darei a soma dele e seus antecessesores! </h2>
			<form action="receber.php" method="post">
			<input type="number" name="numero">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>