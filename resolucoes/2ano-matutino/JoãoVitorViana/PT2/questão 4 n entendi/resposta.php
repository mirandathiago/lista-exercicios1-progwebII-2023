<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cálculo Raiz</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Equação de 2° Grau</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			
			<?php

				$a = $_POST["a"] ?? 0;
				$b = $_POST["b"] ?? 0;
				$c = $_POST["c"] ?? 0;

				$delta = $b**2 - 4 * $a * $c;

				$x1 = ((-$b + sqrt($delta)) / (2 * $a));
				$x2 = ((-$b - sqrt($delta)) / (2 * $a));

				if($delta < 0){
					echo "<h2>A equação não tem uma raiz exata</h2>";
				}else if($delta == 0){
					echo "<h2>A equação possui uma única raiz exata<br>Sendo ela = ".$x1."</h2>";
				}else if($delta > 0){
					echo "<h2 class='alerta-verde'>A equação possui duas raízes reais<br>Sendo elas  Raiz 1 = ".$x1."<br>Raiz 2 = ".$x2."</h2>";
				}

			?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>