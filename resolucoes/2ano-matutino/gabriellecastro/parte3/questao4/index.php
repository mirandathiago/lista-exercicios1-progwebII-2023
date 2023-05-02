<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para descobrir o resultado da soma de 1 a n</h1>
		
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
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