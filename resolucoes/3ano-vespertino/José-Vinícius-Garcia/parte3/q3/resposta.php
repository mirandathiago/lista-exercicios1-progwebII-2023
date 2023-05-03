<?php

$num1 = $_POST ["num1"] ?? "0";
$num2 = $_POST ["num2"] ?? "0";


$cont = 0;
for ($i= $num1; $i <= $num2; $i++) { 
	if ($i%2 == 0) {
		$cont++;
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
		<h1>Contador</h1>
	</header>
	<div class="container">
		<div class="box resposta">


			<p class="alerta-amarelo"> Existem <?=$cont?> números pares.</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>