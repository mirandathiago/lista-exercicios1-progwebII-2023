<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Maior e Menor Número</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Maior e Menor</h1>
	</header>
	<div class="container">
		<div class="box resposta">
<?php

				$valor1 = $_POST["valor1"] ?? 0;
				$valor2 = $_POST["valor2"] ?? 0;
				$valor3 = $_POST["valor3"] ?? 0;

				if($valor1 < $valor2 && $valor1 < $valor3){
					$menor = $valor1;
				}
				if($valor2 < $valor1 && $valor2 < $valor3){
					$menor = $valor2;
				}
				if($valor3 < $valor1 && $valor3 < $valor2){
					$menor = $valor3;
				}
				if($valor1 > $valor2 && $valor1 > $valor3){
					$maior = $valor1;
				}
				if($valor2 > $valor1 && $valor2 > $valor3){
					$maior = $valor2;
				}
				if($valor3 > $valor1 && $valor3 > $valor2){
					$maior = $valor3;
				}
				if($valor1 == $valor2 && $valor1 == $valor3){
					$menor = $valor1;
					$maior = $valor1;
				}
				if($valor1 == $valor2 && $valor1 < $valor3){
					$menor = $valor1;
					$maior = $valor3;
				}
				if($valor2 == $valor3 && $valor2 < $valor1){
					$menor = $valor2;
					$maior = $valor1;					
				}

?>

			<?="<h2>Maior: {$maior} <br> Menor: {$menor}</h2>"?>

			<a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>