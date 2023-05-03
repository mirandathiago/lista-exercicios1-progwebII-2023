<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Terceira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Sabores de pizza favoritos</h1>
	</header>

	<div class="container">

		<div class="box formulario">
			
			<form action="index.php" method="get">

			  <fieldset>

				<legend>Selecione os sabores de sua preferência:</legend>

				<div>
				  <input type="checkbox" id="Calabresa" name="sabores[]" value="Calabresa">
				  <label for="Calabresa">Calabresa</label>
				</div>

				<div>
				  <input type="checkbox" id="Camarão" name="sabores[]" value="Camarão">
				  <label for="Camarão">Camarão</label>
				</div>

				<div>
				  <input type="checkbox" id="Nutella" name="sabores[]" value="Nutella">
				  <label for="Nutella">Nutella</label>
				</div>

				<div>
				  <input type="checkbox" id="Quatro queijos" name="sabores[]" value="Quatro queijos">
				  <label for="Quatro queijos">Quatro queijos</label>
				</div>

				<div>
				  <input type="checkbox" id="Portuguesa" name="sabores[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>

				<div>
				  <input type="checkbox" id="Cheddar" name="sabores[]" value="Cheddar">
				  <label for="Cheddar">Cheddar</label>
				</div>

			  </fieldset>
				
				<button name="enviar"> Enviar </button>

			</form>

		</div>

		<div class="box resposta">

			<h2>Resposta</h2>


            <?php

            $sabores = $_GET["Sabores"] ?? [];

            foreach($sabores as $sabores){

                echo "<h4>{$sabores}</h4>";

            }


            ?>

		</div>

	</div>

</body>
</html>