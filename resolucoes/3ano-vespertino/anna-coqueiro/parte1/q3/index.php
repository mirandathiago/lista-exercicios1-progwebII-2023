<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estiloif.css">
</head>
<body>
	<div class="container">
		<div class="box formulario">
			<h1>Calcule a média final do aluno</h1>
			<form action="receber.php" method="get">
				<label>Informe a primeira nota:
					<input type="number" step="0.1" id="nota1" name="nota1" required>
				</label>

				<label>Informe a segunda nota:
					<input type="number" step="0.1" id="nota2" name="nota2" required>
				</label>

				<label>Informe a terceira nota:
					<input type="number" step="0.1" id="nota3" name="nota3" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>