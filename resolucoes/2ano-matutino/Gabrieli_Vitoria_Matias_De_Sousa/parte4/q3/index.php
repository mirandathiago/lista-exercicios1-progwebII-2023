<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Pizzaria</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="container">
		<div class="box formulario">
			<h2>Selecionar sabores de pizza</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="sabores">Selecione os sabores:</label><br>
		<input type="checkbox" name="sabores[]" value="Calabresa">Calabresa<br>
		<input type="checkbox" name="sabores[]" value="Mussarela">Mussarela<br>
		<input type="checkbox" name="sabores[]" value="Frango">Frango<br>
		<input type="checkbox" name="sabores[]" value="Portuguesa">Portuguesa<br><br>
		<input type="submit" value="Enviar">
	</form>
		</div>
		<div class="box resposta">
		<h2>Resultado</h2>
		<?php

/* Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. 
Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. 
Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. 
Certifique-se de que a lista seja clara e fácil de ler, 
para que o cliente possa verificar suas escolhas antes de fazer o pedido.
 */

		if (isset($_POST['sabores'])) {
			$sabores = $_POST['sabores'];
			echo "<p>Você selecionou os seguintes sabores:</p>";
			echo "<ul>";
			foreach ($sabores as $sabor) {
				echo "<li>$sabor</li>";
			}
			echo "</ul>";
		}
	?>
		</div>
	</div>
</body>
</html>