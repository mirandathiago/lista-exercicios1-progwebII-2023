<!DOCTYPE html>
<html>
<head>
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
			<h2>Frutas selecionadas</h2>
				<?php
					
					foreach($_POST as $entrada){ //percorre o array e coloca na variavel os que foram escolhidos
						echo "<h3>{$entrada}</h3>";
					}
        ?>
        
	</div>
</body>
</html>