
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
		<h1>Questão 8 Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Valor Celular</h2>
			<form action = "resposta.php" method = "get">
				<label>Valor Celular:
					<input type="number" name="valor" min = "0" required>
				</label>
				<label>Parcelas:
					<input type="number" name="parcelas" min="0" max = "12" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>