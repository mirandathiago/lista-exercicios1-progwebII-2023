<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$valor = $_POST["valor"];
		$fatorial = -1;

		if($valor == 2 || $valor == 3) {
			$mensagem = "O fatorial de {$valor} é: {$fatorial}";
		}
		else {
			for($cont = $valor; $cont >= 1; $cont--) {
				$fatorial *= $cont;
			}
		}
			
		$mensagem = "O fatorial  {$valor} é: {$fatorial}";
			
	} else {
		$mensagem = "Por favor, preencha todos os campos.";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>calculado</title>
	<link href="https://fonts.googleapis.com/css?family"Audiowide|Sofia|Trirong rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<p class="alerta-vermelho"><?= $mensagem ?></p>
            <a href="index1.php" class="link">concluir</a>
		</div>
	</div>
</body>
</html