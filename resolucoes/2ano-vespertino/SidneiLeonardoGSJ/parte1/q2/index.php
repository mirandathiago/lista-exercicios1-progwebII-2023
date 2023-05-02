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
		<h1>Dobro e Metade de um Número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dobre e metade</h2>
			<form action="resposta.php" method="post">

				<label>Digite um número para ser mostrado o dobro dele e a sua metade:
					<input type="number" id="dobrometade" name="dobrometade" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>