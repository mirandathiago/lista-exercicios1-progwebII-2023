<?php

$valor = $_POST ["valor"] ?? "1";
$i = 0;


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
		<h1>TABUADA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<h2>Resposta</h2>
<?php
while ($i <= 10) {
	$resultado =  $i * $valor ;
	$i++;
	echo " <br> <p class='alerta-verde'> {$i} x {$valor} = {$resultado}</p>";

		$resultado = 0;
}
?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>