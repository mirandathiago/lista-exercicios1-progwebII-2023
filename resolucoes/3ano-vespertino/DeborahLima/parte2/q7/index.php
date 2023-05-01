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
		<h1>Taxa de Metabolismo Basal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>TMB</h2>

			<form action = "resposta.php" method = "post">
				<label>Nome:
					<input type="text" name="nome" required>
				</label>

				<label>Idade:
					<input type="number" name="idade" required>
				</label>

				<label>Peso:
					<input type="number" name="peso" required>
				</label>

				<label>Altura:
					<input type="number" name="altura" step = "0.01" required>
				</label>

				<label>Gênero:
					<select name="genero">
						<option value="F">Feminino</option>
						<option value="M">Masculino</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>

		</div>		
	</div>
</body>
</html>