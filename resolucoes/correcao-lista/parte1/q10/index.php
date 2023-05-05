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
		<h1>Questão 10 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>10- Um banco está oferecendo um empréstimo com juros compostos de 2,5% ao mês. Crie um formulário que receba o valor do empréstimo e o número de meses de pagamento. Em seguida, crie um código PHP que calcule o valor total a ser pago pelo empréstimo.</h2>
			
			<form action="resposta.php" method="post">
				<label>Valor do Empréstimo:
					<input type="number" id="valor" name="valor" required step="0.1">
				</label>

				<label>Meses a Pagar:
					<input type="number" id="meses" name="meses" required min="1">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>