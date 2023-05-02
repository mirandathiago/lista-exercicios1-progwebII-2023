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
		<h1>SILVEIRA PIZZAS</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Faça seu pedido escolhendo os sabores disponíveis!</h2>
			<form action="index.php" method="post">

			   <fieldset>
				<legend>Selecione os sabores abaixo:</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="pizza[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="mussarela" name="pizza[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizza[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="baiana" name="pizza[]" value="baiana">
				  <label for="baiana">Baiana</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="pizza[]" value="frango">
				  <label for="frango">Frago</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores escolhidos:</h2>
			<?php 
				$pizzas = $_POST["pizza"] ?? "Escolha um sabor";

				foreach($pizzas as $sabores){ 
			?>
				<li><?="{$sabores}"?></li>
			<?php } ?>
            <a href="resposta.php" class="link">Confirmar Pedido</a>
		</div>
	</div>
</body>
</html>