<!DOCTYPE html>
<html>
<head>
	<title>Dobro e metade</title>
</head>
<body>
	<h1>Dobro e metade</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numero">Digite um número:</label>
		<input type="number" id="numero" name="numero"><br><br>
		<input type="submit" value="Enviar">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numero = $_POST["numero"];
		$dobro = $numero * 2;
		$metade = $numero / 2;
		echo "<p>O dobro de $numero é $dobro.</p>";
		echo "<p>A metade de $numero é $metade.</p>";
	}
	?>
</body>
</html>
