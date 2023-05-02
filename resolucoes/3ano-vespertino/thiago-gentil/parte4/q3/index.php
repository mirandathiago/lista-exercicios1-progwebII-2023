<!DOCTYPE html>
<html>
<head>
	<title>Pizzaria</title>
</head>
<body>
	<h2>Escolha os sabores da sua pizza:</h2>
	<form method="post">
		<input type="checkbox" name="sabores[]" value="calabresa">Calabresa<br>
		<input type="checkbox" name="sabores[]" value="mussarela">Mussarela<br>
		<input type="checkbox" name="sabores[]" value="frango">Frango<br>
		<input type="checkbox" name="sabores[]" value="atum">Atum<br>
		<input type="checkbox" name="sabores[]" value="portuguesa">Portuguesa<br>
		<input type="submit" value="Enviar">
	</form>
	<hr>
	<h2>Sabores selecionados:</h2>
	<?php
		if(isset($_POST['sabores'])){
			$sabores = $_POST['sabores'];
			echo "<ul>";
			foreach($sabores as $sabor){
				echo "<li>".$sabor."</li>";
			}
			echo "</ul>";
		}
	?>
</body>
</html>
