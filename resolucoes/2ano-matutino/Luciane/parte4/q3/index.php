<?php
/*3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza.
 Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes.
  Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. 
  Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pizzas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>PIZZARIA KISSABOR</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action = "index.php" method = "get"> 
			  <fieldset>
				<legend>Escolha o sabor de pizza desejado:</legend>
				<div>
				  <input type="checkbox" id="mussarela" name="pizzas[]" value="Mussarela"> <!-- pizza envia vários valores pois é um array -->
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="Calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="margherita" name="pizzas[]" value="Margherita">
				  <label for="margherita">Margherita</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizzas[]" value="Portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="napolitana" name="pizzas[]" value="Napolitana">
				  <label for="napolitana">Napolitana</label>
				</div>
				<div>
				  <input type="checkbox" id="atum" name="pizzas[]" value="Atum">
				  <label for="atum">Atum</label>
				</div>
				<div>
				  <input type="checkbox" id="bacon" name="pizzas[]" value="Bacon">
				  <label for="bacon">Bacon</label>
				</div>
				<div>
				  <input type="checkbox" id="palmito" name="pizzas[]" value="Palmito">
				  <label for="palmito">Palmito</label>
				</div>
				<div>
				  <input type="checkbox" id="quatro queijos" name="pizzas[]" value="Quatro Queijos">
				  <label for="quatro queijos">Quatro Queijos</label>
				</div>
                <div>
				  <input type="checkbox" id="frango com Catupiry" name="pizzas[]" value="Frango com Catupiry">
				  <label for="frango com Catupiry">Frango com Catupiry</label>
				</div>
                <div>
				  <input type="checkbox" id="alho e oleo" name="pizzas[]" value="Alho e Óleo">
				  <label for="alho e oleo">Alho e Óleo</label>
				</div>
                <div>
				  <input type="checkbox" id="romeu e julieta" name="pizzas[]" value="Romeu e Julieta">
				  <label for="romeu e julieta">Romeu e Julieta</label>
				</div>
                <div>
				  <input type="checkbox" id="pepperoni" name="pizzas[]" value="Pepperoni">
				  <label for="pepperoni">Pepperoni</label>
				</div>
                <div>
				  <input type="checkbox" id="carne seca" name="pizzas[]" value="Carne Seca">
				  <label for="carne seca">Carne Seca</label>
				</div>
			  </fieldset>
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Os sabores selecionados são:</h2>
			<?php
                $pizzas = $_GET["pizzas"] ?? []; //recupera  os valores do aray pizzas para pizzas
                foreach($pizzas as $pizza){ //para cada valor da array pizzas, passe cada um para a variável pizza e imprima uma por uma
                    echo "<h3>{$pizza}</h3>";
                }
            ?>
		</div>
	</div>
</body>
</html>
