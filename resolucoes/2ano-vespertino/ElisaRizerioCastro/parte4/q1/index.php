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
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas</h2>
			<form action="resposta.php" method="post">
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="f[]" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="f[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="pera" name="f[]" value="pera">
				  <label for="uva">Pera</label>
				</div>
				<div>
				  <input type="checkbox" id="amora" name="f[]" value="amora">
				  <label for="abacaxi">amora</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="f[]" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>
			  <br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>