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
		<h1>Calculadora de Empréstimo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de Empréstimo</h2>
			<form action="resposta.php" method="post">
				<label>Valor do Empréstimo:
					<input type="number" id="valoremprestimo" name="valoremprestimo" required>
				</label>
				
				<label>Número de meses de pagamento:
					<input type="number" id="numesesemprestimo" name="numesesemprestimo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>