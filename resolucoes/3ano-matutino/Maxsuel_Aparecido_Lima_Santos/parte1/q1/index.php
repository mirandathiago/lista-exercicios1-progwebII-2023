<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Preço com Desconto</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Preço com Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre com os valores</h2>
			<form action="resposta.php" method="post">
				<label>Valor:
					<input type="number" step="0.01" required id="valor" name="valor" >
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>