<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1></h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Os sabores escolhidos foram:</p>
				<?php
    				$pizzas = $_GET["pizzas"] ?? [];

					foreach ($pizzas as $indice => $pizza) {
                        echo "$indice => $pizza <br>";
                    }

				?>

			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>