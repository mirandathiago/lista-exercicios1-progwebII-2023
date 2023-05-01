<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$valor = $_POST["valor"] ?? 1;
		$soma = 0;

		if($valor > 0) {
			for($cont = 1; $cont <= $valor; $cont++) {
				$soma += $cont;
			}

			$mensagem = "<p class='alerta-verde'>A soma dos números de 1 a {$valor} foi: {$soma}</p";

		} else {
			$mensagem = "<p class='alerta-vermelho'>O valor deve ser maior do que 1.</p>";
		}
	} else {
		$mensagem = "ERRO 404!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Soma de Números</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma de Números</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?= $mensagem ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>