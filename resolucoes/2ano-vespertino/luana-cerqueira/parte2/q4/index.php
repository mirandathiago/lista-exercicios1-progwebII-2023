<?php
	$a = $_POST["num_a"] ?? "";
	$b = $_POST["num_b"] ?? "";
	$c = $_POST["num_c"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo pela fórmula de Bhaskara</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post">
				<label>Número A:
					<input value="<?=$a?>" type="number" id="num_a" name="num_a" required>
				</label>

				<label>Número B:
					<input value="<?=$b?>" type="number" id="num_b" name="num_b" required>
				</label>

				<label>Número C:
					<input value="<?=$c?>" type="number" id="num_c" name="num_c" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$method = $_SERVER["REQUEST_METHOD"];

			if($method == "POST"){
				$delta = $b**2 - 4*$a*$c;
				if($delta < 0){
					echo "<p>A equação não possui raízes reais.</p>";
				}else if($delta == 0){
					$x = (-$b) / (2 * $a);
					echo "<p>A equação só possui uma raiz real.<br> <strong>x = {$x}</strong></p>";
				}else if($delta > 0){
					$x1 = ((- $b) + sqrt($delta)) / (2 * $a);
					$x2 = ((- $b) - sqrt($delta)) / (2 * $a);
					echo "<p>A equação possui duas raízes reais.<br> <strong>x1 = {$x1}<br>x2 = {$x2} </strong> </p>";
				}

			}else{
				echo "<p>Aguardando envio do formulário.</p>";
			}
			?>
		</div>
	</div>
</body>
</html>