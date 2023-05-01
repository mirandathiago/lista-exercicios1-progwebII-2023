<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Números Pares</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite os Valores Abaixo</h2>
			<form action="resposta.php" method="post">
				<label>Início:
					<input type="number" step="1" id="inicio" name="inicio" required>
				</label>

				<label>Fim:
					<input type="number" step="1" id="fim" name="fim" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>