2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2


<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
	<form method="post" action="">
		<label for="numero">Digite um número:</label>
		<input type="number" id="numero" name="numero">
		<input type="submit" value="Enviar">
	</form>

	<?php
		if (isset($_POST['numero'])) {
			$n = $_POST['numero'];
			$d = $n * 2;
			$m = $n / 2;
			echo "Dobro: " . $d . " e Metade: " . $m;
		}
	?>
</body>
</html>