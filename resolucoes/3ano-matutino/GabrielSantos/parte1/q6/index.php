
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Área do terreno</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>CALCULAR ÁREA DO TERRENO</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha corretamente as informações abaixo:</h2>
			<form action="resposta.php" method="post">
				<label>Largura:
					<input type="number" id="largura" name="largura" required>
				</label>

				<label>Comprimento:
					<input type="number" id="comprimento" name="comprimento" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>