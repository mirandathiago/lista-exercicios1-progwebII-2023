<?php

	$real = $_GET["real"] ?? "";
	$cotacao = $_GET["cotacao"] ?? "";



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
		<h1>Questão 9 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>9- João está planejando uma viagem para o exterior e precisa converter o valor do real para dólar. Crie um formulário que receba o valor em real e a cotação do dólar em reais. Em seguida, crie um código em PHP que calcule o valor em dólar correspondente e exiba na tela. </h2>

			<form action="index.php" method="get">
				<label>Valor em Real:
					<input type="number" id="real" name="real" step="0.1" required value="<?=$real?>">
				</label>

				<label>Cotação do Dólar no dia:
					<input type="number" id="cotacao" name="cotacao" step="0.1" required value="<?=$cotacao?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
				if(isset($_GET["enviar"])){
					
					$dolar = $real  / $cotacao;
					$dolar = number_format($dolar,2);

					echo "<p class='alerta-verde'>Com a cotação do dólar em R$ {$cotacao} o valor de R$ {$real} convertido em dolar fica em $ {$dolar}</p>";

				}

			?>


		</div>
	</div>
</body>
</html>