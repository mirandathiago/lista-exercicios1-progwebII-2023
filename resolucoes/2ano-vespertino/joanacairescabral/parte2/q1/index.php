<?php
$num1 = $_POST['num1'] ?? 0;
$num2 = $_POST['num2'] ?? 0;
$num3 = $_POST['num3'] ?? 0;

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
		<h1>Maior e menor numero</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Primeiro número:
					<input type="number" id="num1" name="num1" required>
				</label>
				<label>Segundo número:
					<input type="number" id="num2" name="num2" required>
				</label>
				<label>Terceiro número:
					<input type="number" id="num3" name="num3" required>
				</label>	

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p>Menor número: {$menor} e Maior número: {$maior}</p>";
			?>

		</div>
	</div>
</body>
</html>