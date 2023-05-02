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
		<h1>Valor do Consumo de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">

			<h2>Resposta</h2>

			<?php

				$valor1 = $_POST["valor1"] ?? 0;

				
				if($valor1 > 0 && $valor1 <= 100){//verificando se o valor ultrapassa os 100 kWh
					if($valor1 > 0 && $valor1 < 20){//checando se o valor atende os requisitos da taxa mínima caso ele seja menor que 20 .
						$kwh = 20;
					}else{
						$kwh = ($valor1*0.50)+20;//caso não for menor, efetue o cálculo do valor somado com a taxa mínima.
					}
				}else if($valor1 >= 101 && $valor1 <= 200){//verificando se o valor é maior que 101 e menor que 200 kWh
					$kwh = ($valor1*0.70)+20;
				}else if($valor1 > 200){//verificando se o valor ultrapassa os 200 kWh
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