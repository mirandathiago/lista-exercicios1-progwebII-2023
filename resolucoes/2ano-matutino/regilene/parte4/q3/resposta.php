<?php

	/*3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.
	*/

?>

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
		<h1>Sabores de Pizzas</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<form action="resposta.php" method="get">

			<fieldset>

				<legend>Selecione os sabores de Pizzas:</legend>

				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>

				<div>
				  <input type="checkbox" id="mussarela" name="sabores[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>

				<div>
				  <input type="checkbox" id="presunto" name="sabores[]" value="presunto">
				  <label for="presunto">Presunto</label>
				</div>

				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango</label>
				</div>

				<div>
				  <input type="checkbox" id="bacon" name="sabores[]" value="bacon">
				  <label for="bacon">Bacon</label>
				</div>

				<div>
				  <input type="checkbox" id="milho" name="sabores[]" value="milho">
				  <label for="milho">Milho</label>
				</div>

				<div>
				  <input type="checkbox" id="quatroqueijos" name="sabores[]" value="quatroqueijos">
				  <label for="quatroqueijos">QuatroQueijos</label>
				</div>

				<div>
				  <input type="checkbox" id="carneseca" name="sabores[]" value="carneseca">
				  <label for="carneseca">CarneSeca</label>
				</div>

				<div>
				  <input type="checkbox" id="palmito" name="sabores[]" value="palmito">
				  <label for="palmito">Palmito</label>
				</div>

				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>

				
			</fieldset>

				<button name="enviar"> Enviar </button>

			</form>

		</div>	
		
		<div class="box resposta">

			<h2>Resposta</h2>

            <?php

                $sabores = $_GET["sabores"] ?? [];

                //var_dump($frutas);
                //array [].
                //string "".

                foreach($sabores as $sabor){

                    echo "<h3>{$sabor}</h3>";

                }

            ?>
			
		</div>

	</div>
	
</body>
</html>