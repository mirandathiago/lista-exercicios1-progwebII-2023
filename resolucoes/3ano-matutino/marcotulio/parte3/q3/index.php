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
		<h1>Calculadora de Números Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de Números Pares</h2>
			<form action="resposta.php" method="post">
				<label>Início do intervalo:
					<input type="numero" id="iniciointervalo" name="iniciointervalo" required>
				</label>

				<label>Fim do intervalo:
					<input type="numero" id="fimintervalo" name="fimintervalo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>