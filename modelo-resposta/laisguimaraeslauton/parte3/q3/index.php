<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Terceira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h2>Quantidade de números pares em um intervalo</h1>
	</header>

	<div class="container">

		<div class="box formulario">

			<h2>Intervalo numérico: </h2>

			<form action="resposta.php" method="post">

				<label>Insira aqui o início do intervalo:
					<input type="number" id="num1" name="num1" required>
				</label>

				<label>Insira aqui o fim do intervalo:
					<input type="number" id="num2" name="num2" required>
				</label>

				<button name="enviar"> Enviar </button>

			</form>

		</div>

	</div>

</body>
</html>