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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post"> 
				<label>Nome:
					<input type="nome"  name="nome" required>
				</label>

				<label>Nota 1:
					<input type="number"  name="primeiranota" required>
				</label>

				<label>Nota 2:
					<input type="number"  name="segundanota" required>
				</label>

				<label>Nota 3:
					<input type="number"  name="terceiranota" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>