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

				<label>Informe o valor em real:
					<input type="number" name="num1" step="0.1" required value="<?=$num1?>"  >
				</label>

				<label>Informe a cotação em dolar:
					<input type="number" name="num2" step="0.1" required  value="<?=$num2?>"  >
				</label>
			
				<button name="enviar"> Enviar </button>

			</form>
		</div>

		<div class="box resposta">

			<h2>Resultado</h2>

		<?php 

		
		$num1 = $_POST["num1"] ?? 1;
		$num2 = $_POST["num2"] ?? 5.50;
		$num3 = $num1 / $num2 ;

		

		?>
		
		<h3>O valor em real é R$<?=$num1?> </h3>
		<h3>O valor do dolar é $<?=$num2?> </h3>
		<br>
		<h3> O valor convertido é $<?=$num3?>  </h3>
            
		</div>
	</div>
</body>
</html>