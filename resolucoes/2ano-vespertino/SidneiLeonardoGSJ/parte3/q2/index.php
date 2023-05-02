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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="resposta.php" method="post">
				<label>Informe um Número:
					<input type="number" id="valor1" name="valor1" required>
				</label>
				<button name="enviar"> Calcular </button>
			</form>
		</div>		
	</div>
</body>
</html>