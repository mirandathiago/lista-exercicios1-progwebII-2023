<!DOCTYPE html>
<html>
<head>
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
			<h2>Sabores Solicitados:</h2>
			<?php
				foreach($_POST as $sabor){ //percorre o array e coloca na variavel os que foram escolhidos
					echo "<li>{$sabor}</li>";
				}
			
			
			?>
	</div>
</body>
</html>