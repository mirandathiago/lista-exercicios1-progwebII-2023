<!DOCTYPE html>
<?php

$longe = $_POST["longe"] ; 
$combus = $_POST["combus"]  ;
$necessario = $longe / $combus;





?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tanque de Combustivel</h1>
	</header>
	<div class="container">
		<div class="box resposta">

			<h2>Resultado</h2>
			<p>Registro criado:</p>
			<p class="alerta-vermelho"><?php echo "A distância informada foi {$longe} km"; ?></p>
			<p class="alerta-amarelo"><?php echo "O consumo medio do combustivel é de {$combus} litros"; ?></p>
			<p class="alerta-verde"><?php echo "O combustivel necessário será de {$necessario} litros"; ?></p>
            <a href="index.php" class="link">Voltar</a>

			
		</div>
	</div>
</body>
</html>