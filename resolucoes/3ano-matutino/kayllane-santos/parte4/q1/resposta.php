<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Frutas escolhidas:</h2>
		
			<?php
				if(isset($_POST["frutas"])){
					$frutas = $_POST["frutas"];
					foreach($frutas as $fruta){
							echo "<p class='alerta-azul'>{$fruta}</p>";
							echo "<br>";
						}
			}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>