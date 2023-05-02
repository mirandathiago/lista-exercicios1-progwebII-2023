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
		<h1>Formulário Pizzas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Faça seu Pedido</h2>
			<form action = "resposta.php" method = "post">
				<label>Nome:
					<input type="text" name="nome" required>
				</label>

			   <fieldset>
				<legend>Selecione os sabores da pizza:</legend>
				<div>
				  <input type="checkbox" name="sabores[]" value="frango">
				  <label for="frango">Frango com Catupiry</label>
				</div>

				<div>
				  <input type="checkbox" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>

				<div>
				  <input type="checkbox" name="sabores[]" value="baiana">
				  <label for="baiana">Baiana</label>
				</div>

				<div>
				  <input type="checkbox" name="sabores[]" value="chocoloate">
				  <label for="abacaxi">Chocolate</label>
				</div>

				<div>
				  <input type="checkbox" name="sabores[]" value="casa">
				  <label for="casa">A moda da Casa</label>
				</div>

				<div>
				  <input type="checkbox" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>

		</div>		
	</div>
</body>
</html>