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
		<h1>Selecionador de Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Formulário de Frutas Favoritas</h2>
			<form action="resposta.php" method="post">
			   <fieldset>
				<legend>Frutas Favoritas:</legend>
				<div>
				  <input type="checkbox" id="Abacaxi" name="frutas[]" value="Abacaxi">
				  <label for="Abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="Banana" name="frutas[]" value="Banana">
				  <label for="Banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="Laranja" name="frutas[]" value="Laranja">
				  <label for="Laranja">Laranja</label>
				</div>
				<div>
				  <input type="checkbox" id="Limão" name="frutas[]" value="Limão">
				  <label for="Limão">Limão</label>
				</div>
				<div>
				  <input type="checkbox" id="Maçã" name="frutas[]" value="Maçã">
				  <label for="Maçã">Maçã</label>
				</div>
				<div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>