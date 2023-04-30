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
		<h1>Selecionador de Sabores de Pizza</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Sabores de Pizza</h2>
			<?php
				$sabores = $_POST["sabores"];
				echo "Sabores escolhidos: ";
				foreach($sabores as $sabor){
					echo "<p class='alerta-azul'>{$sabor}</p>" . "<br>";
				}
			?>
            <a href="finalizar.php" class="link b">Finalizar pedido</a>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>