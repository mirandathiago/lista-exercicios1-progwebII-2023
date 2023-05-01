<?php

$a = $_POST["a"] ?? 2;
$b = $_POST["b"] ?? 5;
$c = $_POST["c"] ?? 3;


$delta = ($b*$b)-((4*$a)*$c);

$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);



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
		<h1>Lista parte-2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-04</h2>
			<form method="post" action="index.php">
				<label>Digite o valor de a:
					<input type="number" name="a"  required >
				</label>
                <label>Digite o valor de b:
					<input type="number" name="b"  required >
				</label>
                <label>Digite o valor de c:
					<input type="number" name="c"  required >
				</label>
				
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
          <h2>X1: <?=$x1?></h2>
          <h2>X2: <?=$x2?></h2>
			
		</div>
	</div>
</body>
</html>