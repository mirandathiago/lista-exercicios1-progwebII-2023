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
		<h1>Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
			<fieldset>
				<legend>Selecione os sabores de pizza:</legend>
				<div>
				  <input type="checkbox" id="Calabresa" name="pizzas[]" value="Calabresa">
				  <label for="Calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="Portugal" name="pizzas[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="QuatroQueijos" name="pizzas[]" value="Quatro queijos">
				  <label for="Quatro queijos">Quatro queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="Caipira" name="pizzas[]" value="Caipira">
				  <label for="Caipira">Caipira</label>
				</div>
				<div>
				  <input type="checkbox" id="Napoli" name="pizzas[]" value="Napolitana">
				  <label for="Napolitana">Napolitana</label>
				</div>
			  </fieldset>
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Você escolheu os seguintes sabores:</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$pizza = $_POST["pizzas"] ?? [];
					foreach($pizza as $pizzas){
						print "<li> {$pizzas}</li>";
					}
			} else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>