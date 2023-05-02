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
		<h1>Pizzas Preferidas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
			  <fieldset>
				<legend>Selecione suas pizzas favoritas:</legend>
				<div>
				  <input type="checkbox" id="mussarela" name="pizzas[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizzas[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="lombo" name="pizzas[]" value="lombo">
				  <label for="lombo">Lombo</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="pizzas[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="bacon" name="pizzas[]" value="bacon">
				  <label for="bacon">Bacon</label>
				</div>
			  </fieldset>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php


           
          $pizzas = $_GET["pizzas"] ?? [];

          foreach($pizzas as $pizza){
            echo"<h3>{$pizza}</h3>";
          }


       

         ?>


		</div>
	</div>
</body>
</html>