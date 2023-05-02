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
		<h1>Somador</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Para saber o resultado da soma dos números de 1 a N:</h2>
			<form action="resposta.php" method="post">
				<label>Informe o valor de N:
					<input type="number" id="n" name="n" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>