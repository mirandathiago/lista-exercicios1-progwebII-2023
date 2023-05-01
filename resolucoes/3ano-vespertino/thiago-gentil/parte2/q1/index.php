<!DOCTYPE html>
<html>
<head>
	<title>Verificar maior e menor número</title>
</head>
<body>
	<h1>Verificar maior e menor número</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numero1">Digite o primeiro número:</label>
		<input type="number" id="numero1" name="numero1"><br><br>
		<label for="numero2">Digite o segundo número:</label>
		<input type="number" id="numero2" name="numero2"><br><br>
		<label for="numero3">Digite o terceiro número:</label>
		<input type="number" id="numero3" name="numero3"><br><br>
		<input type="submit" value="Verificar maior e menor número">
	</form>
	<?php

	// Me segue no Github, Thiago
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numero1 = $_POST["numero1"];
		$numero2 = $_POST["numero2"];
		$numero3 = $_POST["numero3"];
		if ($numero1 > $numero2 && $numero1 > $numero3) {
			echo "<p>O maior número é $numero1.</p>";
			if ($numero2 > $numero3) {
				echo "<p>O menor número é $numero3.</p>";
			} else {
				echo "<p>O menor número é $numero2.</p>";
			}
		} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
			echo "<p>O maior número é $numero2.</p>";
			if ($numero1 > $numero3) {
				echo "<p>O menor número é $numero3.</p>";
			} else {
				echo "<p>O menor número é $numero1.</p>";
			}
		} else {
			echo "<p>O maior número é $numero3.</p>";
			if ($numero1 > $numero2) {
				echo "<p>O menor número é $numero2.</p>";
			} else {
				echo "<p>O menor número é $numero1.</p>";
			}
		}
	}
	?>
</body>
</html>
