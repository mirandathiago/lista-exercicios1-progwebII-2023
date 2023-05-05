<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutas Selecionadas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php

				$frutas = $_POST["frutas"] ?? [];

				
				echo "<h3>As frutas escolhidas foram:<br><br><br></h3>";
				foreach($frutas as $fruta){
					echo "<h3>".$fruta."<br></h3>";
				}

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>