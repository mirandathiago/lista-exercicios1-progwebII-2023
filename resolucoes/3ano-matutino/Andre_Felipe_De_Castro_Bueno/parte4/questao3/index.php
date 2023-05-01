<?php 
/* 
3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie
um formulário que permita que o cliente selecione os sabores desejados utilizando
checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores
selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler,
para que o cliente possa verificar suas escolhas antes de fazer o pedido
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
		<h1>Sabores de pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form>
			  <fieldset>
				<legend>Selecione os sabores desejados:</legend>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizzas[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="nuttela" name="pizzas[]" value="nuttela">
				  <label for="nuttela">Nuttela</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="pizzas[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="queijo" name="pizzas[]" value="queijo">
				  <label for="queijo">Queijo</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php 
                $pizzas = $_GET["pizzas"] ?? "";

                foreach($pizzas as $sabor){
                    echo "<li>{$sabor}</li>";
                }

            ?>
			
		</div>
	</div>
</body>
</html>