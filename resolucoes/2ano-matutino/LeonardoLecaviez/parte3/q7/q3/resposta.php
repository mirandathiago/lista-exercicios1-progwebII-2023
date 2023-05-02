<?php
    $numero = $_POST["numero"] ?? 0;
    $parada = $_POST["parada"] ?? 0;

    for($n = 0; $n % 2 == 0; $n++){
        echo $n;
    }

	$parar = $numero - $parada;
	$parou = $parar / 2;
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
		<h1>Verificador Números Pares</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Os números pares de <?=$numero?> - <?=$parada?> serão <?=$parou?></p>
        
			<a href="receber.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>