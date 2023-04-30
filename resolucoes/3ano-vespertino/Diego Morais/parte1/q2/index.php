
<?php

$valor = $_POST["valor"] ?? "";
$result = $valor * 2;


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
		<h1>Parte-1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão 2</h2>
			<form method="post" action="index.php">
				Valor: <input type="number" name="valor">
								
				<button> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<p class="alerta-verde">Resultado: <?=$result?></p>
		</div>
	</div>
</body>
</html>
































































































