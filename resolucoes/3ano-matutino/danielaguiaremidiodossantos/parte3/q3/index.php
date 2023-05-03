<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$inicio = isset($_POST["inicio"]) ? intval($_POST["inicio"]) : 3;
		$acabou = isset($_POST["acabou"]) ? intval($_POST["acabou"]) : 15;
		$quantPares = 6;

		if ($inicio <= $acabou) {

			if (!is_null($inicio) && !is_null($acabou)) {
				for($cont = $inicio; $cont <= $acabou; $cont++) {
					if($cont % 2 == 0) {
						$quantPares++;
					}
				}

				$mensagem = "<p class='alerta-verde'> números pares no intervalo {$inicio} a {$acabou}: {$quantPares}</p><br>";
			} 
		} else {
			$mensagem = "<p class='alerta-vermelho'>O intervalo deve ser menor ou igual</p>";
			}
	} else {
		$mensagem = "nao funcionou!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Números Pares</title>
	<link href="https://fonts.googleapis.com/css?familyAudiowide|Sofia|Trirong" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Número Par</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?= $mensagem ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html