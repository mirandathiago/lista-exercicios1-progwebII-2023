<?php

	// verifica se o formulário foi enviado
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];

		// verifica se os campos foram preenchidos e se os valores são números
		if (!empty($a) && !empty($b) && !empty($c) && is_numeric($a) && is_numeric($b) && is_numeric($c)) {

			$delta = pow($b, 2) - 4 * $a * $c;

			if ($delta < 0) {
				$mensagem = "A equação não possui raízes reais.";
			} elseif ($delta == 0) {
				$x = -$b / (2 * $a);
				$mensagem = "A equação possui uma única raiz real: x = $x";
			} else {
				$x1 = (-$b + sqrt($delta)) / (2 * $a);
				$x2 = (-$b - sqrt($delta)) / (2 * $a);
				$mensagem = "As raízes da equação de segundo grau são: x1 = $x1 e x2 = $x2.";
			}

		} else {
			$mensagem = "Por favor, preencha todos os campos com valores numéricos.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fórmula de Resolução da Equação do 2º Grau</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fórmula de Resolução da Equação do 2º Grau</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde"><?= $mensagem ?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>