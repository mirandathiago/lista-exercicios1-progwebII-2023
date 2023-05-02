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
		<h1>Cardápio Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha os sabores que deseja: </h2>
			<form action="index.php" method="post">
			
			   <fieldset>
				<div>
				  <input type="checkbox" id="Calabresa" name="sabores[]" value="Calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="Quatro Queijos" name="sabores[]" value="Quatro Queijos">
				  <label for="Quatro Queijos">Quatro Queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="Catupiri" name="sabores[]" value="Catupiri">
				  <label for="Catupiri">Catupiri</label>
				</div>
				<div>
				  <input type="checkbox" id="Portuguesa" name="sabores[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="Moda da casa" name="sabores[]" value="Moda da casa">
				  <label for="Moda da casa">Moda da casa</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
			<?php
				echo "<div class='alerta-amarelo'>Sabores Escolhidos:</div>";
                $sabores = $_POST["sabores"] ?? [];
               	foreach($sabores as $sabor){
                		echo "<h3>{$sabor}</h3>";
            	}
				
			?>
			<a href="index.php" class="link">Enviar pedido</a>
		</div>
	</div>
</body>
</html>