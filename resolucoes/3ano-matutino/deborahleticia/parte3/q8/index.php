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
		<h1>Formulário da Cidade A e B</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informações referentes às cidades</h2>
			<form action="resposta.php" method="post">
				<label>Número de habitantes da cidade A:
					<input type="number" name="populacaoA" required>
				</label>
				<label>Número de habitantes da cidade B:
					<input type="number" name="populacaoB" required>
				</label>
				<label>Taxa anual de crescimento da cidade A:
					<input type="number" name="txA" step="0.1" required>
				</label>
				<label>Taxa anual de crescimento da cidade B:
					<input type="number" name="txB" step="0.1"required>
				</label>

				<button name="enviar">Enviar</button>
			</form>
		</div>		
	</div>
</body>
</html>