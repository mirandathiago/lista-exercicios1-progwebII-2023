<!DOCTYPE html>
<html>
<head>
	<title>QUESTÃO 2 / PARTE 3</title>
</head>
<body>
<h4> QUESTÃO 2/ PARTE 3 </h4> <br>
<?php
if (isset($_POST['numero'])) {
	$num = intval($_POST['numero']);
	echo "<h2>Tabuada do número ".$num.":</h2>";

	echo "<table>";
	echo "<tr><th>Operação</th>   <th>Resultado</th></tr>";

	$i = 1;
	while ($i <= 10) {
	  $resultado = $num * $i;
	  echo "<tr><td>".$num." x ".$i."</td><td>".$resultado."</td></tr>";
	  $i++;
	}

	echo "</table>";
}
?>

<form method="post" action="index.php">
	<label for="numero">Digite um número inteiro:</label>
	<input type="number" name="numero" id="numero">
	<button type="submit">Calcular tabuada</button>
</form>

</body>
</html>