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
		<h1>Equação de 2° Grau com a fórmula de Bhaskara</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				$a = $_POST["a"] ?? 0;
				$b = $_POST["b"] ?? 0;
				$c = $_POST["c"] ?? 0;

				$delta = $b**2 - 4 * $a * $c;//definindo o valor de delta.

				$x1 = ((-$b + sqrt($delta)) / (2 * $a));//realizando a operação da fórmula
				$x2 = ((-$b - sqrt($delta)) / (2 * $a));

				if($delta < 0){//verificando se delta é menor que zero
					echo "<h2>A equação não possui raízes reais</h2>";
				}else if($delta == 0){//verificando se delta é igual que zero
					echo "<h2>A equação possui uma única raiz real<br>Raiz Real = ".$x1."</h2>";
				}else if($delta > 0){//verificando se delta é maior que zero
					echo "<h2 class='alerta-verde'>A equação possui duas raízes reais<br>Raiz Real 1 = ".$x1."<br>Raiz Real 2 = ".$x2."</h2>";
				}

			?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>