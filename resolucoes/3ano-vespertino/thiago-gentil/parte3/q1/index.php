<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Fatorial</title>
</head>
<body>
	<h1>Calculadora de Fatorial</h1>
	<form method="post">
		<label>Digite um número inteiro: </label>
		<input type="number" name="numero" required>
		<button type="submit">Calcular</button>
	</form>

	<?php
		if(isset($_POST["numero"])){
			$numero = $_POST["numero"];
			$fatorial = 1;
			if($numero == 0){
				echo "<p>O fatorial de 0 é igual a 1.</p>";
			}
			else{
				for($i = $numero; $i >= 1; $i--){
					$fatorial *= $i;
				}
				echo "<p>O fatorial de $numero é igual a $fatorial.</p>";
			}
		}
	?>
</body>
</html>
