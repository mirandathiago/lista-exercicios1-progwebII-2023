<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Maior e menor número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="receber.php" method="post">
				<label>Digite o primeiro número:
					<input type="number" id="numero1" name="numero1" required>
				</label>
				<label>Digite o segundo número:
					<input type ="number" id="numero2" name="numero2" required> 
				</label>
				<label>Digite o terceiro número:
					<input type ="number" id="numero3" name="numero3" required> 
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>