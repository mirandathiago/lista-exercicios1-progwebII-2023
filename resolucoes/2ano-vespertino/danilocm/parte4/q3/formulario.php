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
		<h1>Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
			   <fieldset>

				<legend>Selecione os sabores da pizza:</legend>
				<div>
				  <input type="checkbox" id="margherita" name="pizzas[]" value="Margherita">
				  <label for="banana">Margherita</label>
				</div>
				<div>
				  <input type="checkbox" id="pepperoni" name="pizzas[]" value="Pepperoni">
				  <label for="morango">Pepperoni</label>
				</div>
				<div>
				  <input type="checkbox" id="carne" name="pizzas[]" value="carne">
				  <label for="uva">Carne seca.</label>
				</div>
				<div>
				  <input type="checkbox" id="frango-com-catupiry" name="pizzas[]" value="Frango com Catupiry">
				  <label for="abacaxi">Frango com catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="Calabresa">
				  <label for="laranja">Calabresa</label>
				</div>
				<div>
					<input type="checkbox" id="cinco" name="pizzas[]" value="cinco">
					<label for="laranja">Cinco Queijos</label>
				  </div>
				  
					

			  </fieldset>

				<button name="enviar"> Enviar Pedido </button>
			</form>
		</div>		
	</div>
</body>
</html>