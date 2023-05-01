<?php
/*
	3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.
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
		<h1>Pizzas preferidas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
			  <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizzas[]" value="Portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="Calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="lombo_canadense" name="pizzas[]" value="Lombo Canadense">
				  <label for="lombo_canadense">Lombo Canadense</label>
				</div>
				<div>
				  <input type="checkbox" id="a_moda" name="pizzas[]" value="À moda da casa">
				  <label for="a_moda">À moda da Casa</label>
				</div>
				<div>
				  <input type="checkbox" id="baiana" name="pizzas[]" value="Baiana">
				  <label for="baiana">Baiana</label>
				</div>
			  </fieldset>
				
				<button > Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Pizzas escolhidas</h2>
			

            <?php

                $pizzas = $_GET["pizzas"] ?? [];

                foreach($pizzas as $pizza){
                    echo "<li>{$pizza}</li>";
                }




            ?>  
		</div>
	</div>
</body>
</html>