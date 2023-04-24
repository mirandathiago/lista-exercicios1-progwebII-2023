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
		<h1>Formulário Hora do Dia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira seu nome</h2>
			<form action = "resposta.php" method = "post">
				<label>Nome:
					<input type="text" name="nome" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>