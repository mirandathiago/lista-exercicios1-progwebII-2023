<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Bibiano's Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<br>
			<h2>Cardápio</h2>
			<form action="index.php" method="get">
			<fieldset>

				<legend>Selecione seus sabores favoritos de pizza:</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="Calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="marguerita" name="pizzas[]" value="Marguerita">
				  <label for="marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizzas[]" value="Portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="muçarela" name="pizzas[]" value="Muçarela">
				  <label for="muçarela">Muçarela</label>
				</div>
				<div>
				  <input type="checkbox" id="napolitana" name="pizzas[]" value="Napolitana">
				  <label for="napolitana">Napolitana</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Comanda</h2>
			<br>
			<p>Pizzas escolhidas: </p>
			<p class="alerta-vermelho">

				<?php
					$pizzas = $_GET["pizzas"] ?? [""];
					
					foreach($pizzas as $pizza){
						echo "&bull; {$pizza}";
						echo "<br>";
					}
				?>

			</p>
		</div>
	</div>
</body>
</html>