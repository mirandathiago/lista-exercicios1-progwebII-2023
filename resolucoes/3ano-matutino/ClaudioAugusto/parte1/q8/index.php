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
		<h1>Magazine PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os valores da compra</h2>
			<form action="resposta.php" method="post">
				<label>Valor do Produto:
					<input type="number" id="valor" name="valor" placeholder="Aguardando" step="0.01" required>
				</label>

				<label>Número de parcela:
					<input type="number" id="parcela" name="parcela" placeholder="Aguardando" min="0" max="12" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>