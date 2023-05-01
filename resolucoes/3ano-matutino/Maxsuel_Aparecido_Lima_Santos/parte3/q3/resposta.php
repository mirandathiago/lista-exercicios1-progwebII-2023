<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$inicio = isset($_POST["inicio"]) ? intval($_POST["inicio"]) : 0;
		$fim = isset($_POST["fim"]) ? intval($_POST["fim"]) : 0;
		$quantPares = 0;

		if ($inicio <= $fim) {

			if (!is_null($inicio) && !is_null($fim)) {
				for($cont = $inicio; $cont <= $fim; $cont++) {
					if($cont % 2 == 0) {
						$quantPares++;
					}
				}

				$mensagem = "<p class='alerta-verde'>Quantidade de números pares no intervalo {$inicio} a {$fim}: {$quantPares}</p><br>";
			} 
		} else {
			$mensagem = "<p class='alerta-vermelho'>O início do intervalo deve ser menor ou igual ao fim do intervalo</p>";
			}
	} else {
		$mensagem = "ERRO 404!";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Números Pares</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Números Pares</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?= $mensagem ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>