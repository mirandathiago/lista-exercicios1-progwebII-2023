<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>CALCULADORA DE EQUAÇÃO DE 2º GRAU</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os valores</h2>
			<form action="resposta.php" method="post">
				<label>Primeiro número(a):
					<input type="number" name="a" required>
				</label>
				<label>Segundo número(b):
					<input type="number" name="b" required>
				</label>
				<label>Terceiro número(c):
					<input type="number" name="c" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>		
	</div>
</body>
</html>