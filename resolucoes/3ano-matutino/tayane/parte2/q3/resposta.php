<?php
	$nome = $_GET["nome"] ?? "";
	$horario = date("H");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Saudação</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php
				if($horario >= 05 && $horario < 12){
					echo "<p class='alerta-azul'>Bom dia, {$nome}!</p>";
				}else if($horario >= 12 && $horario < 18){
					echo "<p class='alerta-azul'>Boa tarde, {$nome}!</p>";
				}else if($horario >= 18 && $horario <= 23){
					echo "<p class='alerta-azul'>Boa noite, {$nome}!</p>";
				}else if($horario >= 00 && $horario <= 04){
					echo "<p class='alerta-azul'>Vá dormir, está de madrugada!</p>";
				}
			?>
		</div>
	</div>
</body>
</html>