<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Primeira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Frutas Preferidas</h1>
	</header>

	<div class="container">

		<div class="box formulario">
			
			<form action="index.php" method="get">

			  <fieldset>

				<legend>Selecione suas frutas favoritas:</legend>

				<div>
				  <input type="checkbox" id="Banana" name="frutas[]" value="Banana">
				  <label for="banana">Banana</label>
				</div>

				<div>
				  <input type="checkbox" id="Morango" name="frutas[]" value="Morango">
				  <label for="Morango">Morango</label>
				</div>

				<div>
				  <input type="checkbox" id="Uva" name="frutas[]" value="Uva">
				  <label for="uva">Uva</label>
				</div>

				<div>
				  <input type="checkbox" id="Abacaxi" name="frutas[]" value="Abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>

				<div>
				  <input type="checkbox" id="Laranja" name="frutas[]" value="Laranja">
				  <label for="Laranja">Laranja</label>
				</div>

			  </fieldset>
				
				<button name="enviar"> Enviar </button>

			</form>

		</div>

		<div class="box resposta">

			<h2>Resposta</h2>

            <?php

            $frutas = $_GET["frutas"] ?? [];

            foreach($frutas as $frutas){

                echo "<h4>{$frutas}</h4>";
            }



            ?>


		</div>

	</div>

</body>
</html>