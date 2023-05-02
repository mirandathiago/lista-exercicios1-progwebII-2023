<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para o maior número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<label>Digite o primeiro número:
					<input type="number" id="num1" name="num1" required>
				</label>
				<label>Digite o segundo número:
					<input type ="number" id="num2" name="num2" required> 
				</label>
				<label>Digite o terceiro número:
					<input type ="number" id="num3" name="num3" required> 
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>