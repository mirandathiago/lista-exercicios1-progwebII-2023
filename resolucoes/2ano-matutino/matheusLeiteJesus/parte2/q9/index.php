
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
		<h1>Formulário de Clima</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Determine o Clima</h2>
			<form action="resposta.php" method="get">
				
				<label> Determine o clima:
					<select name="clima">
						<option></option>
						<option value="ensolarado">Ensolarado</option>
						<option value="ameno">Ameno</option>
						<option value="chuvoso">Chuvoso</option>
						<option value="nublado">Nublado</option>
						<option value="tempestuoso">Tempestuoso</option>
					</select>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>