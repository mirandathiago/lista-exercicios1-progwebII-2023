<?php

$valor = $_POST["valor"] ?? "";

for($i = 1; $i <= $valor; $i++){

$calc = $i + $valor * $valor;
}
$resultado = $calc / 2;

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
		<h1>Lista parte-3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-04</h2>
			<form method="post" action="index.php">
				<label>Digite um valor:
					<input type="number" name="valor"  required value="" >
				</label>
                
               
				
								
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
          <h2>Soma dos números de 1 a <?=$valor?>: <?=$resultado?></h2>
         
		</div>
	</div>
</body>
</html>