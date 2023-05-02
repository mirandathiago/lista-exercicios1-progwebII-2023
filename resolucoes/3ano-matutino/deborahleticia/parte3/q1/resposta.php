<?php

	$numero = $_POST["numero"];
    $fatorial = 1;

	if($numero == 0){
		$fatorial = 1;
	}else{
		for($i=$numero; $i>0; $i--){
			$fatorial = $fatorial * $i;
		}
	}
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
		<h1>Formulário de Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo"> O fatorial do número <?=$numero?> é: <?=$fatorial?></p>
            <a href="index.php" class="link">Voltar à página inicial</a>
		</div>
	</div>
</body>
</html>