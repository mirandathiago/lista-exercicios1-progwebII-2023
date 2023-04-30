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
		<h1>Calculadora de Parcelas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de Parcelas</h2>
			<form action="resposta.php" method="post">
				
				<label>Valor do Celular:
					<input type="number" id="valorcelular" name="valorcelular" step="0.1" required>
				</label>

				<label>Quantidade de Parcelas (até 12x):
					<input type="number" id="qtdparcelas" name="qtdparcelas" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>