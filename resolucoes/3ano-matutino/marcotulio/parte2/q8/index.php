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
		<h1>Calculadora de IMC (Índice de Massa Corporal)</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de IMC (Índice de Massa Corporal)</h2>
			<form action="resposta.php" method="post">
				<label>Peso:
					<input type="number" id="peso" name="peso" step="0.01" required>
				</label>

				<label>Altura:
					<input type="number" id="altura" name="altura" step="0.01" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>