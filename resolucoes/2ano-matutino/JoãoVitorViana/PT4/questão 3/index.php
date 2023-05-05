<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>PaPa Pizza!!😋🍕</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="post">
			   <fieldset>

				<legend>SABORES DISPONÍVEIS:</legend>
				<div>
				  <input type="checkbox" id="margherita" name="pizzas[]" value="Margherita">
				  <label for="marherita">Margherita: molho de tomate, queijo mozzarella, manjericão fresco.</label>
				</div>
				<div>
				  <input type="checkbox" id="a-moda" name="pizzas[]" value="A Moda">
				  <label for="a-moda">A moda da Casa: molho de tomate, calabresa, catupiry, salsa e bacon.</label>
				</div>
				<div>
				  <input type="checkbox" id="presunto-queijo" name="pizzas[]" value="Presunto e Queijo">
				  <label for="presunto-queijo">Presunto e Queijo: queijo mozzarella, pepperoni, cebola e presunto.</label>
				</div>
				<div>
				  <input type="checkbox" id="frango-com-catupiry" name="pizzas[]" value="Frango com Catupiry">
				  <label for="frango-com-catupiry">Frango com catupiry: molho de tomate, queijo mozzarella, frango desfiado, catupiry.</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="Calabresa">
				  <label for="calabresa">Calabresa: molho de tomate, catupiry, calabresa moída, cebola roxa fatiada e azeitonas.</label>
				</div>
				<div>
					<input type="checkbox" id="portuguesa" name="pizzas[]" value="Portuguesa">
					<label for="portuguesa">Portuguesa: molho de tomate, queijo mozzarella, presunto, ovos, cebola, azeitonas, ervilha.</label>
				  </div>
				  <div>
					<input type="checkbox" id="salsa" name="pizzas[]" value="Salsa">
					<label for="salsa">Salsa: molho de tomate, queijo mozzarella, cogumelos, salsa, cebola roxa, cebola picada e brócolis ao vapor.</label>
				  </div>
				  <div>
					<input type="checkbox" id="gorgonzolla" name="pizzas[]" value="Gorgonzolla">
					<label for="gorgonzolla">Gorgonzolla: molho de tomate, queijo prato, molho gorgonzolla, cebola fatiada, azeitonas, bacon e milho.</label>
				  </div>
				  <div>
					<input type="checkbox" id="nordestina" name="pizzas[]" value="Nordestina">
					<label for="nordestina">Nordestina: carne de sol, bacon, catupiry, queijo mozzarella, carne seca desfiada, anéis de cebola e milho.</label>
				  </div>
				  <div>
					<input type="checkbox" id="parmesao" name="pizzas[]" value="Parmesão">
					<label for="parmesao">Parmesão: molho de tomate, molho parmesão, queijo prato, calabresa moída, cebola e azeitonas.</label>
				  </div>

			  </fieldset>

				<button name="enviar"> Enviar Pedido </button>
			</form>
		</div>		
	</div>
</body>
</html>