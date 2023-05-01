<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 7</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>TAXA DE METABOLISMO BASAL</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre om os dados</h2>
			<form action="resposta.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>
				<label>Idade(em anos):
					<input type="number" step="1" name="idade" required>
				</label>
				<label>Peso(em kg):
					<input type="number" step="0.1" name="peso" required>
				</label>
				<label>Altura(em cm):
					<input type="number" step="1" name="altura" required>
				</label>
				<fieldset>
					<legend>Gênero: </legend>
				<label>
					<input type="radio" name="genero" value="M">
					Masculino
				</label>
				<label>
					<input type="radio" name="genero" value="F">
					Feminino
				</label>
				</fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>