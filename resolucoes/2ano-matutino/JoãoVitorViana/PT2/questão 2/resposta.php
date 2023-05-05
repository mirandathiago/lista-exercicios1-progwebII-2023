<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
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

//Menor que 100kWh, taxa de R$20,00 fixa.
//Até 100 kWh, o valor é de R$ 0,50 por kWh.
//De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
//Acima de 200 kWh, o valor é de R$ 0,87 por kWh.


				$valor1 = $_POST["valor1"] ?? 0;

				
				if($valor1 > 0 && $valor1 <= 100){
					if($valor1 > 0 && $valor1 < 20){
						$kwh = 20;
					}else{
						$kwh = ($valor1*0.50)+20;
					}
				}else if($valor1 >= 101 && $valor1 <= 200){
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