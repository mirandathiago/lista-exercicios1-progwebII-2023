<!DOCTYPE html>
<html>
<head>
	<title>QUESTÃO 1 / PARTE 4</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h4> QUESTÃ 1 / PARTE4</h4>
	<h1>Frutas selecionadas:</h1>
	<?php
	if(isset($_POST['frutas'])) {
		$frutas = $_POST['frutas'];
		foreach($frutas as $fruta) {
			echo $fruta . "<br>";
		}
	} else {
		echo "Nenhuma fruta selecionada.";
	}
	?>
	<br>
	<a href="index.php">Voltar</a>
</body>
</html>