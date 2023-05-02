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
		<h1>Equação de 2° Grau</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				$a = $_POST["a"] ?? 0;
				$b = $_POST["b"] ?? 0;
				$c = $_POST["c"] ?? 0;

				$delta = $b**2 - 4 * $a * $c;

				$x1 = ((-$b + sqrt($delta)) / (2 * $a));
				$x2 = ((-$b - sqrt($delta)) / (2 * $a));

				if($delta < 0){
					echo "<h2>A equação não tem raízes reais</h2>";
				}else if($delta == 0){
					echo "<h2>A equação tem apenas uma única raiz real, Raiz real = ".$x1."</h2>";
				}else if($delta > 0){
					echo "<h2 class='alerta-verde'>A equação tem duas raízes reais, Raiz real 1 = ".$x1."<br>Raiz Real 2 = ".$x2."</h2>";
				}

			?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>