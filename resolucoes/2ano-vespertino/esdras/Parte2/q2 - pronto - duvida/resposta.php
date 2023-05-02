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
		<h1>Valor do Consumo de Energía</h1>
	</header>
	<div class="container">
		<div class="box resposta">

			<h2>Resposta</h2>

			<?php

				$valor1 = $_POST["valor1"] ?? 0;

				
				if($valor1 > 0 && $valor1 <= 100){
					if($valor1 > 0 && $valor1 < 20){
						$kwh = 20;
					}else{
						$kwh = ($valor1*0.50)+20;
					}
				}else if($valor1 > 100 && $valor1 < 199){
					$kwh = ($valor1*0.70)+20;
				}else if($valor1 > 200){
					$kwh = ($valor1*0.87)+20;
				}

				$kwh = number_format($kwh, 2, '.', '');

			?>

			<?="<h2 class='alerta-verde'>O valor é de R$ {$kwh}</h2>"?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>