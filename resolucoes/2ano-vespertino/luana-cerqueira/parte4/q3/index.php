<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sabores Pizzas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post">
			   <fieldset>
				<legend>Selecione os sabores desejados:</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="sabor[]" value="Calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="Portuquesa" name="sabor[]" value="Portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="marguerita" name="sabor[]" value="Marguerita">
				  <label for="marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" id="frango_catupiry" name="sabor[]" value="Frango com catupiry">
				  <label for="frango_catupiry">Frango com Catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="baiana" name="sabor[]" value="Baiana">
				  <label for="baiana">Baiana</label>
				</div>
				<div>
				  <input type="checkbox" id="quatro_queijos" name="sabor[]" value="Quatro queijos">
				  <label for="quatro_queijos">Quatro queijos</label>
				</div>
			  </fieldset>

				<button name="enviar"> Confirmar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores selecionados:</h2>
			<?php
				$sabores = $_POST["sabor"] ?? [];
				$method = $_SERVER["REQUEST_METHOD"];

				if($method == "POST"){
					foreach($sabores as $sabores){
						echo "<li>{$sabores}</li>";
					}
				}else{
					echo "<p>Aguardando envio do formulário.</p>";
				}
			?>
		</div>
	</div>
</body>
</html>