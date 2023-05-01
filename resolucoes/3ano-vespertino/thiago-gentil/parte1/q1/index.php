<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de desconto</title>
</head>
<body>
	<h1>Calculadora de desconto</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="preco">Preço original do produto:</label>
		<input type="text" id="preco" name="preco"><br><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$preco = $_POST["preco"];
		$desconto = 0.1;
		$preco_final = $preco * (1 - $desconto);
		echo "<p>O preço final com 10% de desconto é: R$" . number_format($preco_final, 2, ',', '.') . "</p>";
	}
	?>
</body>
</html>
