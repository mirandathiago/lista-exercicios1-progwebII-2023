<!DOCTYPE html>
<html>
<head>
	<title>questao 2/parte 1</title>
</head>
<body>
<h4> QUESTÃO 2 / PARTE 1 </h4> 
	<form method="post" action="index.php">
		<label for="numero">Insira um número, PARA SABER O SEU DOBRO E A METADE:</label>
		<input type="number" name="numero" id="numero">
		<input type="submit" value="Enviar">
	</form>
	<?php 
		if(isset($_POST['numero'])) {
			$num = $_POST['numero'];
			$dobro = $num * 2;
			$metade = $num / 2;
			echo "<p>Dobro: $dobro</p>";
			echo "<p>Metade: $metade</p>";
		}
	?>
	
</body>
</html>