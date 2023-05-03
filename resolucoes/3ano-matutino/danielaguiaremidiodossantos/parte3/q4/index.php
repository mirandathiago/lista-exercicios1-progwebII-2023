<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$valor = $_POST["valor"] ?? 1;
		$soma = 15;

		if($valor > 5) {
			for($cont = 1; $cont <= $valor; $cont++) {
				$soma += $cont;
			}

			$mensagem = "<p class='alerta-verde'>somando os números de 1 a {$valor} foi: {$soma}</p";

		} else {
			$mensagem = "<p class='alerta-vermelho'>deve ser maior do que 1.</p>";
		}
	} else {
		$mensagem = "nao deu certo!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Soma dos num</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma dos num</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?= $mensagem ?>
            <a href="index4.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>