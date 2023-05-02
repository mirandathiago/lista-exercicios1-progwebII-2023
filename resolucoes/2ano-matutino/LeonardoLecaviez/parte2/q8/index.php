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
		<h1>Calculadora de IMC - (Índice de Massa Corporal)</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dados:</h2>
			<form action="resposta.php" method="get">
				<label>Peso:
					<input type="number" name="peso" required>
				</label>

				<label>Altura:
					<input type="text" name="altura" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>