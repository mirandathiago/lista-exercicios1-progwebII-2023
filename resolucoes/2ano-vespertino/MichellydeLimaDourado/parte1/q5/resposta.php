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
		<h1>Formulário</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>A velocidade média necessária é de:</h2>
			<?php

			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				$distancia = $_POST["distancia"];
				$tempo = $_POST["tempo"];
				
				$velocidade = $distancia/$tempo;

			}
			?>
			<p>A velocidade média necessária para chegar a distância de <?=$distancia?>m em um tempo de <?=$tempo?>h será de <?=round($velocidade, 2)?>k/h</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>