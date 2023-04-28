
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
		<h1>Geometria Online</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite o tamanho dos lados do seu triangulo para calcular se será
				<br>-equilatero<br>-Isosceles<br>-Escaleno<br> Lembrando que para um triangulo poder existir 
				a soma dos lados menores deve ser maior que o lado maior!

			</h2>
			<form action="resposta.php" method="post">
				<label>lado menor 1:
				<input type="number" id="area1" name="area1" required>lado menor 2:
					<input type="number" id="area2" name="area2" required>lado maior 3:
					<input type="number" id="area3" name="area3" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>