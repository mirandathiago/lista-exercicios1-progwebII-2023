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
			
			<form action="index.php" method="get">

			  <fieldset>

				<legend>Selecione o sabora da sua pizza:</legend>

				<div>
				  <input type="checkbox" id="americana" name="pizza[]" value="americana">
				  <label for="americana">Americana</label>
				</div>

				<div>
				  <input type="checkbox" id="quatroqueijos" name="pizza[]" value="quatroqueijos">
				  <label for="quatroqueijos">Quatro Queijos</label>
				</div>

				<div>
				  <input type="checkbox" id="calabresa" name="pizza[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>

				<div>
				  <input type="checkbox" id="Portuguesa" name="pizza[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>

				<div>
				  <input type="checkbox" id="Camarão" name="pizza[]" value="Camarão">
				  <label for="v">Camarão</label>
				</div>

			  </fieldset>

				<button name="enviar"> Enviar </button>

			</form>
		</div>

		<div class="box resposta">
			<h2>Resposta</h2>

            <?php

                $pizza = $_GET["pizza"] ?? [];

                //var_dump($pizza);
                //array [].
                //string "".

                foreach($pizza as $pizza){

                    echo "<h3>{$pizza}</h3>";

                }

            ?>
			
		</div>
	</div>

</body>
</html>