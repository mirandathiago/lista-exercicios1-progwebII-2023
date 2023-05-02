<?php

$sabores = $_GET["sabores"] ?? "";

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
		<h1>Formulário de Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Pizzas</h2>
			<form action="index.php" method="get">
			
			   <fieldset>
				<legend>Selecione os sabores da pizza:</legend>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="carneseca" name="sabores[]" value="carneseca">
				  <label for="carneseca">Carne Seca</label>
				</div>
				<div>
				  <input type="checkbox" id="pepperoni" name="sabores[]" value="pepperoni">
				  <label for="pepperoni">Pepperoni</label>
              
				</div>
				<div>
				</fieldset>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php
			if(isset($_GET["enviar"])){

                if (!empty($sabores)) {
				foreach($sabores as $sabor){
					echo "<li> {$sabor} </li>";
				}
			}else{
				echo "Não há sabores selecionados";
			}
		}

			?>
			
		</div>
	</div>
</body>
</html>