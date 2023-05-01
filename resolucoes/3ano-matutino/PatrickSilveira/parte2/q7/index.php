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
		<h1>Taxa de Metabolismo Basal (TMB)</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os seguintes dados:</h2>
			<form action="resposta.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>
				<label>Idade (em anos):
					<input type="number" id="idade" name="idade" required>
				</label>

				<label>Peso (em kg):
					<input type="number" id="peso" step="0.1" name="peso"  required>
				</label>

				<label>Altura (em cm):
					<input type="number" id="altura" name="altura" required>
				</label>
		
			   <fieldset>
				<legend> Sexo: </legend>
				<div>
				  <input type="radio" id="masculino" name="sexo" value="masculino">
				  <label>Masculino</label>
				</div>
				<div>
				  <input type="radio" id="feminino" name="sexo" value="feminino">
				  <label>Feminino</label>
				</div>			
			  </fieldset>



				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>