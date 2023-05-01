<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$valor = $_POST["valor"];
		$fatorial = 1;

		if($valor == 1 || $valor == 0) {
			$mensagem = "O fatorial de {$valor} é: {$fatorial}";
		}
		else {
			for($cont = $valor; $cont >= 1; $cont--) {
				$fatorial *= $cont;
			}
		}
			
		$mensagem = "O fatorial de {$valor} é: {$fatorial}";
			
	} else {
		$mensagem = "Por favor, preencha todos os campos com valores numéricos.";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fatorial</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<p class="alerta-vermelho"><?= $mensagem ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>