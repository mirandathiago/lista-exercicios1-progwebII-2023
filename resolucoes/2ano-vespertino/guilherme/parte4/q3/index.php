<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Cardápio de pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha seus sabores</h2>
			<form action="index.php" method="post">
				
			   <fieldset>
				<legend>Selecione suas pizzas:</legend>
				<div>
				  <input type="checkbox" id="mussarela" name="sabores[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="carne seca" name="sabores[]" value="carne seca">
				  <label for="carne seca">Carne seca</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>	
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="4 queijos" name="sabores[]" value="4 queijos">
				  <label for="4 queijos">4 queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="sabores[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="nutela" name="sabores[]" value="nutela">
				  <label for="nutela">Nutela</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Pedido:</h2>
			<?php
				$sabores = $_POST["sabores"] ?? [];
				foreach($sabores as $pizza){
					echo "<li>{$pizza}</li>";
				}
			?>
			
		</div>
	</div>
</body>
</html>