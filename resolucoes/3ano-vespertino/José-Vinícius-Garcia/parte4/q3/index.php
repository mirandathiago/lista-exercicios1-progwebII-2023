<?php
/*3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. 
Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. 
Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. 
Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes 
de fazer o pedido.


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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
			<label>Tamanho da pizza:
					<select name="tam">
						<option></option>
						<option value="1">Pequena</option>
						<option value="2">Média</option>
						<option value="3">Grande</option>
					</select>
			   </label>

			   <fieldset>
				<legend>Selecione os sabores:</legend>
				<div>
				  <input type="checkbox"  name="pizzas[]" value="Pepperonni">
				  <label for="banana">Pepperonni</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="Portuguesa">
				  <label for="morango">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox"  name="pizzas[]" value="Frango com Catupiry">
				  <label for="uva">Frango com Catupiry</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="Marguerita">
				  <label for="abacaxi">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="Moda da Casa">
				  <label for="laranja">Moda da Casa</label>
				</div>
			  </fieldset>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>