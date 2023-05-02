PARTE 2 
1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5
<!DOCTYPE html>
<html>
<head>
	<title>Verificador de Números</title>
</head>
<body>
	<h1>Verificador de Números</h1>
	<form method="post" action="">
		<label for="numero1">Número 1:</label>
		<input type="number" id="numero1" name="numero1" required>
		<br><br>
		<label for="numero2">Número 2:</label>
		<input type="number" id="numero2" name="numero2" required>
		<br><br>
		<label for="numero3">Número 3:</label>
		<input type="number" id="numero3" name="numero3" required>
		<br><br>
		<input type="submit" value="Verificar">
	</form>

	<?php
		if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
			$num1 = $_POST['numero1'];
			$num2 = $_POST['numero2'];
			$num3 = $_POST['numero3'];

			$ma = max($num1, $num2, $num3);
			$minor = min($num1, $num2, $num3);

			echo "<h2>Menor Número: " . $minor . " e o Maior Número: " . $ma . "</h2>";
		}
	?>
</body>
</html>