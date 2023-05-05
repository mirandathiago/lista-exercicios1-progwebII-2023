<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sabores</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Pedido Enviado!</h2>
			<?php

				$pizzas = $_POST["pizzas"] ?? [];

				echo "<br><br><h3>O sabores escolhidos foram:</h3><br>";
				foreach($pizzas as $pizza){
					echo "<p>".$pizza."</p>";
				}

			?>

            <a href="formulario.html" class="link">Retornar ao Menu</a>
		</div>
	</div>
</body>
</html>