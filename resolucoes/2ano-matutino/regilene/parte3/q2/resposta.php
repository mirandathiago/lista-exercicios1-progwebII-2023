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
		<h1>Calculadora de Tabuada</h1>
	</header>

	<div class="container">
		<div class="box resposta">

			<h2>Resposta da tabuada</h2>

		<?php

			$numero = $_POST["n"] ?? 00;
			$i = 0;
				
			for($i; $i <=  10; $i++){
				$tabuada = $numero * $i;
				echo "<p class='alerta-vermelho'>{$numero} x {$i} = {$tabuada} <hr></p>";
			}

		?>

            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>

</body>
</html>