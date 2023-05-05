<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Produto com um Desconto de 10%</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preço</h2>
			<form action="resposta.php" method="post">

				<label>Informe o preço do produto para aplicar o desconto de 10%
					<input type="number" id="desconto" name="desconto" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>