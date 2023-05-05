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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if(isset($_GET["enviar"])){
					$largura = $_GET["largura"] ?? 0;
					$comprimento = $_GET["comprimento"] ?? 0;

					$area = $largura * $comprimento;
	
			?>

				<p class="alerta-verde">A área do Terreno é de <?=$area?>m<sup>2</sup></p>

			<?php }else{ ?>
				<p class="alerta-vermelho">Os dados não foram passados</p>
			<?php } ?>	

				<a href="index.php" class="link">Voltar para o Formulário</a>

		</div>
	</div>
</body>
</html>