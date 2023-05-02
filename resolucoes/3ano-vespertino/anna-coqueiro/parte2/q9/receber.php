<?php
$clima=$_GET["clima"];

	switch($clima){
		case "Ensolarado":
			$local="Clube";
			break;
		case "Ameno":
			$local="Parque";
			break;
		case "Nublado":
			$local="Museu";
			break;
		case "Chuvoso":
			$local="Cinema";
			break;
		case "Tempestuoso":
			$local="Casa";
			break;
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
		<h1>Ambiente ideal para o clima</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Ambiente ideal:</h2>
			<p>Com o clima <?=$clima?>, o ambiente ideal é:</p>
			<p class="alerta-verde"><?=$local?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>