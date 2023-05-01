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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php

			$n = $_POST["numero"] ?? 0;
			$i = 0;
				
	for($i; $i <=  10; $i++){
		$tb = $n * $i;
		echo "<p class='alerta-verde'>{$n} x {$i} = {$tb} <hr></p>";
	}
?>

		</div>
	</div>
</body>
</html>