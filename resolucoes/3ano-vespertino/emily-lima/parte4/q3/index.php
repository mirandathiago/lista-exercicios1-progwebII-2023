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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta" method="post">

			   <fieldset>
				<legend>Selecione seus sabores favoritos:</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="quatroQueijo" name="sabores" value="quatroQueijo">
				  <label for="quatroQueijo">QuatroQueijo</label>
				</div>
				<div>
				  <input type="checkbox" id="presunto" name="sabores" value="presunto">
				  <label for="presunto">Presunto</label>
				</div>
				<div>
				  <input type="checkbox" id="peperoni" name="sabores" value="peperoni">
				  <label for="peperoni">Peperoni</label>
				</div>
				<div>
				  <input type="checkbox" id="Frango" name="sabores" value="Frango">
				  <label for="frango">Frango</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>