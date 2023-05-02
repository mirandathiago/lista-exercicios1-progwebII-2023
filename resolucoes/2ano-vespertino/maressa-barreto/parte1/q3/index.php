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

				<label>Nota da prova 1:
					<input type="number" name="num1" step="0.1"  required value="<?=$num1?>" >
				</label>

				<label>Nota da prova 2:
					<input type="number" name="num2"step="0.1"  required value="<?=$num2?>">
				</label>

			<label>Nota da prova 3:
					<input type="number" name="num3" step="0.1" required value="<?=$num3?>">
				</label>

				
				<button name="enviar"> Enviar </button>

			</form>
		</div>

		<div class="box resposta">

			<h2>Resultado</h2>

		<?php 

		$num1 = $_POST["num1"] ?? 1;
		$num2 = $_POST["num2"] ?? 1;
		$num3 = $_POST["num3"] ?? 1;

		$nota1 = (2/10) * $num1;
		$nota2 = (3/10) * $num2;
		$nota3 = (5/10) * $num3;

		$media = ($nota1 + $nota2 + $nota3) ;

		?>

		<h3> Nota da primeira prova : <?=$nota1?> </h3>
		<h3> Nota da segunda prova : <?=$nota2?> </h3>
		<h3> Nota da terceira prova : <?=$nota3?> </h3> 
		<br>
		<h3> Media final :<?=$media?> </h3>
            
		</div>
	</div>
</body>
</html>