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
		<h1>Divisor e multiplicador de numeros</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira seu numero</h2>
			<form action="resposta.php" method="post">
				<label>Numero:
					<input type="text" id="numero" name="numero" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>