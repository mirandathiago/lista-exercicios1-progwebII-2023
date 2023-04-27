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
		<h1>Formulário de Pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Infromações referentes aos sabores de pizza</h2>
			<form action="resposta.php" method="post">

			   <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="carne" name="saborP[]" value="carne">
				  <label for="carne">Carne</label>
				</div>
				<div>
				  <input type="checkbox" id="queijo" name="saborP[]" value="queijo">
				  <label for="queijo">Queijo</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="saborP[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="saborP[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="chocolate" name="saborP[]" value="chocolate">
				  <label for="chocolate">Chocolate</label>
				</div>
			  </fieldset>


				<button name="enviar">Enviar</button>
			</form>
		</div>		
	</div>
</body>
</html>