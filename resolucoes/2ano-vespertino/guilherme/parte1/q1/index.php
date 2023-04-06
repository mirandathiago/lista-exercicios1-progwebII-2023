<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
    <title>Questão 1</title>
</head>
<body>
<header>
	<h1>Desconto</h1>
</header>
	<div class="container">
		<div class="box formulario">
			<h2>Desconto de 10%</h2>
			<form action="resposta.php" method="get">
				<label>Preço original do produto:
					<input type="number" name="preco" step="0.01" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>