<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Selecionador de Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Frutas Favoritas</h2>
			<?php
				echo "Frutas escolhidas: ";
				$frutas = $_POST["frutas"];
				foreach($frutas as $fruta){
					echo "<p class='alerta-azul'>{$fruta}</p><br>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>