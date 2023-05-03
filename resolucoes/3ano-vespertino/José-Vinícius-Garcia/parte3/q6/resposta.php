<?php

$segundos = $_POST ["segundos"] ?? "3600";
$conth = 0;
$contm = 0;

for ($i=0; $i <=$segundos ; $i++) { 
	if ($segundos > 3600) {
		$segundos = $segundos - 3600;
		$conth ++;
	}else if ($segundos > 60) {
		$segundos = $segundos -= 60;
		$contm ++;
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>RESULTADO</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Conversor de segundos</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<p class="alerta-amarelo"><?=$conth?> : <?=$contm?> : <?=$segundos?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>