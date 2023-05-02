<!DOCTYPE html>
<html>
<head>
	<title>Contagem de Números Pares</title>
</head>
<body>
	<h1>Contagem de Números Pares em um Intervalo</h1>
	<form method="post">
		<label for="inicio">Início:</label>
		<input type="number" name="inicio" id="inicio"><br>
		<label for="fim">Fim:</label>
		<input type="number" name="fim" id="fim"><br>
		<input type="submit" value="Calcular">
	</form>

	<?php
	if(isset($_POST['inicio']) && isset($_POST['fim'])){
		$inicio = $_POST['inicio'];
		$fim = $_POST['fim'];

		$contador = 0;

		for($i=$inicio; $i<=$fim; $i++){
			if($i%2==0){
				$contador++;
			}
		}

		echo "<p>Existem ".$contador." números pares no intervalo de ".$inicio." a ".$fim.".</p>";
	}
	?>
</body>
</html>
