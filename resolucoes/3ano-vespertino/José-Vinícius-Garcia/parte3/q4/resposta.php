<?php

$num = $_POST ["num"];
$var = 0;
for ($i=1; $i <= $num ; $i++) { 

	$var +=$i;

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Resposta</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>SOMA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
		
			<p class="alerta-verde">A soma de 1 até <?=$num?> é igual a <?=$var?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>