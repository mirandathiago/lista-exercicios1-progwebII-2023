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
		<h1>Calculadora de Taxa de Metabolismo Basal (TMB)</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fórmulario de Taxa de Metabolismo Basal (TMB)</h2>
			<form action="resposta.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>Idade (em anos):
					<input type="number" id="idade" name="idade" required>
				</label>

				<label>Peso (em kg):
					<input type="number" id="peso" name="peso" step="0.01" required>
				</label>

				<label>Altura (em cm):
					<input type="number" id="altura" name="altura" required>
				</label>				

				<label>Gênero:
					<select name="genero">
						<option></option>
						<option value="Masculino">Masculino</option>
						<option value="Feminino">Feminino</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>