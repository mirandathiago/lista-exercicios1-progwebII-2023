
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fatorial</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>CALCULAR FATORIAL</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha corretamente as informações abaixo:</h2>
			<form action="resposta.php" method="post">
				<label>Número para calcular o fatorial:
					<input type="number" id="num" name="num" min=0 required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>