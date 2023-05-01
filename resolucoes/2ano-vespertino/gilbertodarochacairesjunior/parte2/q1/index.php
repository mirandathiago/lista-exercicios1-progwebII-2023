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
		<h1>Formulário de Horario</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Horario</h2>
			<form action="index.php" method="post">
				<label for="n1">Numero 1</label>
				<input type="number" name="n1">
				<label for="n2">Numero 2</label>
				<input type="number" name="n2">
				<label for="n3">Numero 3</label>
				<input type="number" name="n3">
				<button> Enviar </button>
				<!-- Poderia apenas usar o required para não conseguir enviar o formulario sem preencher -->
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					$num1 = $_POST['n1'];
					$num2 = $_POST['n2'];
					$num3 = $_POST['n3'];

					if ($num1 > $num2 && $num1 > $num3) {
						$maior = $num1;
					} elseif ($num2 > $num1 && $num2 > $num3) {
						$maior = $num2;
					} else {
						$maior = $num3;
					}

					if ($num1 < $num2 && $num1 < $num3) {
						$menor = $num1;
					} elseif ($num2 < $num1 && $num2 < $num3) {
						$menor = $num2;
					} else {
						$menor = $num3;
					}

					echo "O maior número é: " . $maior . "<br>";
					echo "O menor número é: " . $menor;

					// Poderia ser feito assim também usando o min() o max()
					// $num1 = $_POST['num1'];
					// $num2 = $_POST['num2'];
					// $num3 = $_POST['num3'];
				
					// $maior = max($num1, $num2, $num3);
					// $menor = min($num1, $num2, $num3);
				
					// echo "O maior número é: " . $maior . "<br>";
					// echo "O menor número é: " . $menor;
					?>

				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>