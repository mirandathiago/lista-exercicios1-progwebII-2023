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
		<h1>Trabalho de Web </h1>
	</header>

	<div class="container">

		<div class="box formulario">

			<h2>Calculadora</h2>

			<form action="index.php" method="post">

				<label>consumo de energia elétrica :
					<input type="number" name="num1"  step="0.1" required  >
				</label>
			
				<button name="enviar"> Enviar </button>

			</form>
		</div>

		<div class="box resposta">

			<h2>Resultado</h2>

		<?php 

		$num1 = $_POST["num1"] ?? 20;
		
			if ($num1 > 20 && $num1 <= 100) {
				$calculo = $num1 * 0.50;
			}elseif ($num1 >= 101 && $num1 <=200) {
				$calculo = $num1 * 0.70;
			}elseif ($num1 > 200) {
				$calculo = $num1 * 0.87;
			}else{
				$calculo = 20;
			}
	

		?>

		<h3> consumo de energia elétrica : <?=$num1?>KW/H </h3>
		<br>
		<h3>valor a ser pago  :<?=$calculo?></h3>
            
		</div>
	</div>
</body>
</html>


