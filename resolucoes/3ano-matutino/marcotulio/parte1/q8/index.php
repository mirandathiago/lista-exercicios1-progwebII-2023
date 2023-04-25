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
		<h1>Formulário de Parcelamento</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadoras de Parcelas</h2>
			<form action="resposta.php" method="post">
				<label>Valor do Celular:
					<input type="number" id="valorcel" name="valorcel" required>
				</label>

				<label>Quantidade de Parcelas (em até 12 vezes):
					<input type="number" id="qtdparcelas" name="qtdparcelas" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>