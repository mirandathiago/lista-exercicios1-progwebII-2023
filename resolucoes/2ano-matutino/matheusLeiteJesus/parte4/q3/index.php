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
		<h1>Pizzas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
			  <fieldset>
				<legend>Selecione o sabor de pizza que deseja:</legend>
				<div>
				  <input type="checkbox" id="queijo" name="pizza[]" value="Quatro Queijos">
				  <label for="banana">Quatro Queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="pizza[]" value="Frango com catupiry">
				  <label for="morango">Frango com catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="muçarela" name="pizza[]" value="Muçarela">
				  <label for="uva">Muçarela</label>
				</div>
				<div>
				  <input type="checkbox" id="Napolitana" name="pizza[]" value="Napolitana">
				  <label for="abacaxi">Napolitana</label>
				</div>
				<div>
				  <input type="checkbox" id="Atum" name="pizza[]" value="Atum com cebola">
				  <label for="laranja">Atum com cebola</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

                $pizza = $_GET["pizza"] ?? [];
                foreach($pizza as $p){
                    echo "<li> {$p} </li>";
                }


            ?>
		</div>
	</div>
</body>
</html>
