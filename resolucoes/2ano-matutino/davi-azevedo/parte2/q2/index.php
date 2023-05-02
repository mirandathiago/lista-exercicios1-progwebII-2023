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
		<h1>Conta de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calcule aqui o valor de sua conta de Energia! </h2>
			<form action="resposta.php" method="get">
				<label>Infome aqui seu gasto em energia KWH:
					<input type="number" id="dist" name="consumo" required>
				</label>

				<button name="enviar"> Enviar </button>
			
				<h2></h2>
			</form>
		</div>		
	</div>
</body>
</html>