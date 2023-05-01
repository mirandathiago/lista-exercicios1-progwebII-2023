<?php

	$numeroT = $_POST["numeroT"] ?? "";
	$numeroM = 0; 

?>

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
		<h1>Formulário de Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada</h2>
			<?php while($numeroM <= 10){ ?>
			<p> <?=$numeroT?> x <?=$numeroM?> = <?=$numeroT * $numeroM?></p>
			<?php 
			$numeroM++;
			} ?>
			
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>