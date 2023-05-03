<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Equação do 2º Grau</title>
	<link href= "https://fonts.googleapis.com/css?family">  
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1> Equação do 2º Grau</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>valores de a, b e c</h2>
			<form action="receber4.php" method="post">
				<label>a:
					<input type="number" step="1" id="a" name="a" required>
				</label>
				<label>b:
					<input type="number" step="1" id="b" name="b" required>
				</label>
				<label>c:
					<input type="number" step="1" id="c" name="c" required>
				</label>
				<button name="calcular"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>