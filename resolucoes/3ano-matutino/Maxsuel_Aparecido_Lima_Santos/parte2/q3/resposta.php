<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
	
		date_default_timezone_set('America/Sao_Paulo');
		$hora = date("H");
	
		if ($hora >= 5 && $hora <= 12) {
			$saudacao = "Bom dia ";
			$imagem_fundo = "img/manha.jpg";
			$btnCor = "#FFC107";
		} if ($hora >= 13 && $hora <= 18) {
			$saudacao = "Boa tarde ";
			$imagem_fundo = "img/tarde.jpg";
			$btnCor = "#ff9807";
		} if ($hora >= 19 && $hora <= 23) {
			$saudacao = "Boa noite ";
			$imagem_fundo = "img/noite.jpg";
			$btnCor = "#0728ff";
		} else {
			$saudacao = "Vá dormir, está de madrugada!";
			$imagem_fundo = "img/madrugada.jpg";
			$btnCor = "#9807ff";
		}
	
		$mensagem = "{$saudacao}, {$name}!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mensagem Personalizada</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style>
		body {
      		background-image: url('<?php echo $imagem_fundo; ?>');
			background-size: cover;
      		background-position: center;
		}

		.link {
			background-color: <?php echo $btnCor; ?>;
			font-weight: bolder;
		}
	</style>
</head>
<body>
	<div class="container">
			<p class="alerta-hora"><?= $mensagem ?></p>
            <a href="index.php" class="link">Voltar</a>
	</div>
</body>
</html>