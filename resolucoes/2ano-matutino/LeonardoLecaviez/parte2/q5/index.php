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
		<h1>Verificador Par e Ímpar</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Multa por Velocidade</h2>
			<form action="verificadorparimpar.php" method="get">
				<label>Número:
					<input type="number" name="numero" required>
				</label>

				<label>Par ou Ímpar:
					<input type="text" name="parimpar" required>
				</label>

				<button name="jogar"> Jogar </button>
			</form>
		</div>		
	</div>
</body>
</html>