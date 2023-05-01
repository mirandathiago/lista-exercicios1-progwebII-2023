<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 7</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>CONTADOR DE CÉDULA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre com o valor</h2>
			<form action="resposta.php" method="get">
				<label>Valor:
					<input type="number" step="1" name="valor" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>