<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Números Pares</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Número de Pares Entre os Intervalos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe:</h2>
			<form action="resposta.php" method="post">
				<label>Início da contagem:
					<input type="number" id="inicial" name="inicial" required>
				</label>

				<label>Fim da contagem:
					<input type="number" id="final" name="final" required>
				</label>
				<button name="imprimir"> Imprimir </button>
			</form>
		</div>		
	</div>
</body>
</html>