<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>DÍVIDA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os valores</h2>
			<form action="resposta.php" method="post">
				<label>Insira o valor da dívida:
					<input type="number" name="divida" required>
				</label>
				<label>Insira a axa de juros ao mês:
					<input type="number" name="juros" required>
				</label>
				<label>Insira o valor que pode ser pago a cada mês:
					<input type="number" name="dinheiroDeCadaMes" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>