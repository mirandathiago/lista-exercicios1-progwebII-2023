<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo Dívida</h1>
	</header>
	<div class="container">
		<!--  Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago. -->
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="resposta.php" method="POST">
				<label>Valor da dívida:
					<input type="number" name="valor" step="0.01" required>
				</label>

				<label>Taxa de Juros Mensal:
					<input type="number" placeholder="Digite em decimal (2% = 0.02)" name="taxa" step="0.01" required>
				</label>

				<label>Valor Mensal a ser pago:
					<input type="number" name="valormensal" step="0.01" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>