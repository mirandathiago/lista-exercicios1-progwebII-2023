<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8"> 
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header><h1>Calcule em quantos meses você quitará sua dívida</h1></header>
	<div class="container">
		<div class="box formulario">
			<form action="receber.php" method="get">

			<label>Digite o valor da dívida:
					<input type="number" name="valor" required>
				</label>
				<label>Digite o valor que você pode pagar mensalmente:
					<input type="number" name="valormensal" required>
				</label>
				<label>Digite a taxa de juros mensal:
					<input type="number" name="juros" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>