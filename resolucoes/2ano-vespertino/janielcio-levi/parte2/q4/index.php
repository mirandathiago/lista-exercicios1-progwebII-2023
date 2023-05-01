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
		<h1>Baskhara</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os valores da equação de 2º grau:</h2>
			<form action="resposta.php" method="post">
				<label>Insira A:
					<input type="number" id="coeficiente-a" name="coeficiente-a" required>
				</label>
				<label>Insira B:
					<input type="number" id="coeficiente-b" name="coeficiente-b"  required>
				</label>
				<label>Insira C:
					<input type="number" id="coeficiente-c" name="coeficiente-c" required>
				</label>

				<button type="submit" name="submit"> Calcular </button>
			</form>
		</div>		
	</div>
</body>
</html>