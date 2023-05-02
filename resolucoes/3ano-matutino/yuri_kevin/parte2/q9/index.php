
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
		<h1>Questão 9 Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>O dia ta lindo? crima ensorarado?</h2>
			<form action = "resposta.php" method = "get">
				<select name ="escolha" required>
				<option value="ensolarado">ensolarado</option>
				<option value="ameno">ameno</option>
				<option value="chuvoso">chuvoso</option>
				<option value="nublado">nublado</option>
				<option value="tempestuoso">tempestuoso</option>
				</select>
				<button name="enviar"> Enviar </button>
			
			</form>
		</div>		
	</div>
</body>
</html>