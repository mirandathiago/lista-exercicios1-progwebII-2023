<?php
	$a = $_POST["num"] ?? 5;
	$b = $_POST["num2"] ?? 5;
	$c = $_POST["num3"] ?? 5;
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
		<h1>Formulário de Tipos de triângulos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tipos de triângulos</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Lado1:
					<input type="number" name="num" required>
				</label>

				<label>Lado2:
					<input type="number" name="num2" required>
				</label>

				<label>Lado3:
					<input type="number" name="num3" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
			$metodo = $_SERVER["REQUEST_METHOD"];

			if($metodo == "POST")
			if($a < $b + $c && $b < $a + $c && $c < $b + $c){
				if($a==$b && $b==$c && $a==$c)
					echo "Os lados formam um triângulo equilátero";
				elseif ($a==$b || $a==$c || $b==$c)
					echo "Os lados formam um triângulo isósceles";
				else
					echo "Os lados formam um triângulo escaleno";
			}else{
				echo "Os lados não formam um triângulo!";
			}
	?>
		</div>
	</div>
</body>
</html>