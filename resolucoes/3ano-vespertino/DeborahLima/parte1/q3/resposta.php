<?php
	$numero1 = $_GET["num1"] ?? 6;
	$numero2 = $_GET["num2"] ?? 6;
	$numero3 = $_GET["num3"] ?? 6;

	$nota1 = $numero1 * 2;
	$nota2 = $numero2 * 3;
	$nota3 = $numero3 * 5;

	$peso = 2 + 3 + 5;

	$media = ($nota1 + $nota2 + $nota3) / $peso;
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
		<h1>Formulário</h1>
	</header>

	<div class="container">
		<div class="box resposta">
			<h2>Media Final: <?=$media?></h2>
			<p><br>Notas * Peso: <br>
			<?=$numero1?> * 2 = <?=$nota1?> <br>
			<?=$numero2?> * 3 = <?=$nota2?> <br>
			<?=$numero3?> * 5 = <?=$nota3?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>

</body>
</html>