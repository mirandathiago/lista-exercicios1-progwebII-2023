<html>
<head>
	<title>Soma de 1 a N</title>
</head>
<body>
	<form method="POST">
		<label for="n">Digite um número inteiro:</label>
		<input type="number" name="n" id="n" required>
		<br>
		<button type="submit">Calcular soma</button>
	</form>

	<?php
	if(isset($_POST['n'])) {
		$n = $_POST['n'];
		$soma = 0;
		for($i = 1; $i <= $n; $i++) {
			$soma += $i;
		}
		echo "<p>A soma dos números de 1 a $n é: $soma</p>";
	}
	?>
</body>
</html>
