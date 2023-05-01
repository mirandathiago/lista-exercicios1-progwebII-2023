<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> QUESTÃO 7 / PARTE 3</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php
		
		$valor = $_POST['valor'];

		$notas = array(100, 50, 20, 10, 5, 2, 1);

		$contagem = array(0, 0, 0, 0, 0, 0, 0);

		for ($i = 0; $i < count($notas); $i++) {
			$contagem[$i] = intval($valor / $notas[$i]);
			$valor = $valor % $notas[$i];
		}

		echo "<h1>Resultado</h1>";
		echo "<p>Valor informado: R$ " . $_POST['valor'] . "</p>";
		echo "<table>";
		echo "<tr><th>Valor</th><th>Quantidade</th></tr>";
		for ($i = 0; $i < count($notas); $i++) {
			if ($contagem[$i] > 0) {
				echo "<tr><td>R$ " . $notas[$i] . "</td><td>" . $contagem[$i] . " nota(s)</td></tr>";
			}
		}
		echo "</table>";
	?>
	<a href="index.php"> Voltar </a>
</body>
</html>