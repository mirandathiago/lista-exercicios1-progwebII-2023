<!DOCTYPE html>
<html>
<head>
	<title>Frutas Favoritas</title>
</head>
<body>
	<form method="post">
		<label>Escolha suas frutas favoritas:</label><br>
		<input type="checkbox" name="frutas[]" value="banana">Banana<br>
		<input type="checkbox" name="frutas[]" value="laranja">Laranja<br>
		<input type="checkbox" name="frutas[]" value="maça">Maçã<br>
		<input type="checkbox" name="frutas[]" value="uva">Uva<br>
		<input type="checkbox" name="frutas[]" value="manga">Manga<br>
		<input type="submit" value="Enviar">
	</form>
	<?php 
		if(isset($_POST['frutas'])){
			echo "<br>Frutas favoritas escolhidas: ";
			foreach ($_POST['frutas'] as $fruta) {
				echo $fruta.", ";
			}
		}
	?>
</body>
</html>
