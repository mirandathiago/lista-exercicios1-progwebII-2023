<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Primeira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h2>Formulário de número fatorial</h2>
	</header>

	<div class="container">

		<div class="box formulario">

			<h2>Número fatorial</h2>

			<form action="resposta.php" method="post">

				<label>Insira aqui o número a ser fatorado:
					<input type="number" id="num1" name="num1" required>
				</label>

				<button name="enviar"> Enviar </button>

			</form>

		</div>		

	</div>

</body>
</html>