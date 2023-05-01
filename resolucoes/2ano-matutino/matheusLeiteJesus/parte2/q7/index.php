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
			<h2>Informe os lados:</h2>
			<form action="resposta.php" method="get">
				<label>Informe seu nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>Informe sua idade:
					<input type="text" id="nome" name="idade" required>
				</label>

				<label>Informe seu peso:
					<input type="number" id="nome" name="peso" required>
				</label>

				<label>Informe sua altura:
					<input type="number" id="nome" name="altura" required>
				</label>
				<fieldset>
					<legend>Selecione seu gênero:</legend>
					<div>
					  <input type="radio" id="masculino" name="genero" value="feminino">
					  <label for="feminino">Feminino</label>
					</div>
					<div>
					  <input type="radio" id="feminino" name="genero" value="masculino">
					  <label for="masculino">Masculino</label>
					</div>
				</fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>