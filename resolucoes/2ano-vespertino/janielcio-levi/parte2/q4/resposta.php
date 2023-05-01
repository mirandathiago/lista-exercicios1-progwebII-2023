<?php
	$a = $_POST["coeficiente-a"] ?? 1;
	$b = $_POST["coeficiente-b"] ?? 1;
	$c = $_POST["coeficiente-c"] ?? 1;

	$del =$b*$b - 4*$a*$c;
	$x1 = (-$b + sqrt($del))/(2*$a);
	$x2 = (-$b - sqrt($del))/(2*$a);
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
		<h1>Baskhara</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta:</h2>
			<?php

				if ($del < 0) {
					echo "<p class='alerta-vermelho'>A equação não possui raizes reais</p>";
				}elseif ($del == 0) {
					echo "<p class='alerta-amarelo'>A equação possui apenas uma raiz real <br> A raiz é : X = {$x1}</p>";
				}elseif ($del > 0) {
					echo "<p class='alerta-verde'>A equação possui 2 raizes reais, são elas:<br> X' = {$x1} <br> X'' = {$x2}</p>";
				}
			
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>