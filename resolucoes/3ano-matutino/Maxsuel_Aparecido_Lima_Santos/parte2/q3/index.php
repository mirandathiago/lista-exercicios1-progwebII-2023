<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mensagem Personalizada</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Mensagem Personalizada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
				<label>Seu Nome:
					<input type="text" id="name" name="name" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>