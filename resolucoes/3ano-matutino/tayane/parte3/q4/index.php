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
		<h1>Calculadora de Soma de Números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fórmulário de Soma de Números</h2>
			<form action="resposta.php" method="post">
				<label>Informe um Número:
					<input type="number" id="numero" name="numero" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>