<?php
	$nome = $_POST["nome"];
	$nota1 = $_POST["nota1"];
	$nota2 = $_POST["nota2"];
	$nota3 = $_POST["nota3"];
	$peso1 = 2;
	$peso2 = 3;
	$peso3 = 5;

	$media = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);
	$media = number_format($media, 2);
?>


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
		<h1>Formulário de Média</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>As notas de <?=$nome?> são: <?=$nota1?>pts, <?=$nota2?>pts, <?=$nota3?>pts.</p>

			<?php if($media >= 6){?>
				<p class="alerta-verde">Logo, a sua média é <?=$media?></p>
			<?php }else{ ?>
				<p class="alerta-vermelho">Logo, a sua média é <?=$media?></p>
			<?php } ?>
			
            <a href="index.php" class="link">Voltar à página inicial</a> 
		</div>
	</div>
</body>
</html>