<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="resposta.php" method="post">
				<label>Informe o Número:
					<input type="number" id="valor1" name="valor1" required>
				</label>
				<button name="calcular"> Calcular </button>
			</form>
		</div>		
	</div>
</body>
</html>