<?php
    $kwhenergia = $_GET["kwhenergia"] ?? 0;
    $taxa = $kwhenergia + 20;

    $ac = ($kwhenergia * 0.50) + 20;
    $cud =  ($kwhenergia * 0.70) + 20;
    $ad =  ($kwhenergia * 0.87) + 20;

    if($kwhenergia <= 100){
        echo $ac;
    }else if($kwhenergia <= 200){
        echo $cud;
    }else if($kwhenergia > 200){
        echo $ad;
    }

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
		<h1>Calculadora de Quilowatts - Hora</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<h1>A conta de luz será de R$ </h1>



            <?php if($kwhenergia > 200){ ?>
            <p class="alerta-vermelho">Esta foi a conta de luz <?=$ad?> R$ </p>

        <?php }else if($kwhenergia <= 200){ ?> 
            <p class="alerta-amarelo">Sua conta de luz foi de <?=$cud?> R$ </p>

        <?php }else if($kwhenergia <= 100){ ?> 
            <p class="alerta-verde">Parabéns, sua conta de luz foi de <?=$ac?> R$ </p>
        <?php } ?>

			<a href="principalCL.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>