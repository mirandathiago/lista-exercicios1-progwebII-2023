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
		<h1>Calculadora de Raízes de Equação do Segundo Grau</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de Raízes de Equação do Segundo Grau</h2>
			<form action="resposta.php" method="post">
				<label>Coeficiente A:
					<input type="number" id="coeficientea" name="coeficientea" required>
				</label>

				<label>Coeficiente B:
					<input type="number" id="coeficienteb" name="coeficienteb" required>
				</label>

				<label>Coeficiente C:
					<input type="number" id="coeficientec" name="coeficientec" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>