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
				  <input type="checkbox" id="margherita" name="pizzas[]" value="Moda da Casa">
				  <label for="banana">Moda da Casa: molho de tomate, queijo mussarella, manjericão, presunto, milho, bacon.</label>
				</div>
				<div>
				  <input type="checkbox" id="Calabresa" name="pizzas[]" value="Calabresa">
				  <label for="morango">: molho de tomate, queijo mozzarella, pepperoni.</label>
				</div>
				<div>
				  <input type="checkbox" id="quatro-queijos" name="pizzas[]" value="Quatro Queijos">
				  <label for="uva">Quatro queijos: queijo marella, queijo gorgonzola, queijo parmesão, queijo provolone.</label>
				</div>
				<div>
				  <input type="checkbox" id="frango-com-catupiry" name="pizzas[]" value="Frango com Catupiry">
				  <label for="abacaxi">Frango com catupiry: molho de tomate, queijo mozzarella, frango desfiado, catupiry.</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="Calabresa">
				  <label for="laranja">Calabresa: molho de tomate, queijo mozzarella, calabresa fatiada, cebola fatiada.</label>
				</div>
				<div>
					<input type="checkbox" id="portuguesa" name="pizzas[]" value="Portuguesa">
					<label for="laranja">Portuguesa: molho de tomate, queijo mozzarella, presunto, ovos, cebola, azeitonas, ervilha.</label>
				  </div>
				  <div>
					<input type="checkbox" id="vegetariana" name="pizzas[]" value="Vegetariana">
					<label for="laranja">Vegetariana: molho de tomate, queijo mozzarella, tomate, cebola, pimentão, cogumelos.</label>
				  </div>
				  <div>
					<input type="checkbox" id="atum" name="pizzas[]" value="Atum">
					<label for="laranja">Atum: molho de tomate, queijo mozzarella, atum, cebola fatiada, azeitonas.</label>
				  </div>
				  <div>
					<input type="checkbox" id="carne-seca" name="pizzas[]" value="Carne Seca">
					<label for="laranja">Carne seca: molho de tomate, queijo mozzarella, carne seca desfiada, cebola fatiada.</label>
				  </div>
				  <div>
					<input type="checkbox" id="calabresa-com-cebola" name="pizzas[]" value="Calabresa com cebola">
					<label for="laranja">Calabresa com cebola: molho de tomate, queijo mozzarella, calabresa fatiada, cebola fatiada.</label>
				  </div>

			  </fieldset>

				<button name="enviar"> Enviar Pedido </button>
			</form>
		</div>		
	</div>
</body>
</html>