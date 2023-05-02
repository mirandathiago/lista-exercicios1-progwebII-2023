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
		<h1>Calculadora de Média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Média</h2>
			<form action="inicio.php" method="get">
				<label>Nota 1:
					<input type="number" name="nota1" value="<?=$nota1?>" required>
				</label>

				<label>Nota 2:
					<input type="number" name="nota2" value="<?=$nota2?>" required>
				</label>

                <label>Nota 3:
					<input type="number" name="nota3" value="<?=$nota3?>" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>