<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Quarta questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h2>Formulário para resolução de equação do 2° grau</h1>
	</header>

	<div class="container">

		<div class="box formulario">

			<h2>Informe os seguintes valores</h2>

			<form action="resposta.php" method="post">

				<label>Valor de A:
					<input type="number" id="A" name="A" required>
				</label>

				<label>Valor de B:
					<input type="number" id="B" name="B" required>
				</label>

				<label>Valor de C:
					<input type="number" id="C" name="C" required>
				</label>

				<button name="enviar"> Enviar </button>

			</form>

		</div>	

	</div>

</body>
</html>