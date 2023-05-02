
<?php
    $cidadea = $_POST["cidadea"];
    $taxacresa = $_POST["taxacresa"];
    $cidadeb = $_POST["cidadeb"];
    $taxacresb = $_POST["taxacresb"];

    $porcentagema = $taxacresa / 100;
    $porcentagemb = $taxacresb / 100;
    $pa = $cidadea / $porcentagema;
    $pb = $cidadeb / $porcentagemb;

    if($cidadea > $cidadeb){
        $mensagema = "<h2>A cidade A é maior que B</h2>";
    }else if($taxacresa < $taxacresb){
        $mensagemb = "<h2>A cidade A é menor que B</h2>";
    }

    while($j = 0; $j > $cidadeb; $j++){
        $CP = $pa / $pb;
        $j = $CP
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
		<h1>Calculadora de Crescimento Populacional</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo">Serão necessários <?=$CP?> anos para que a população da cidade A ultrapasse a da cidade B.</p>

            <?php if($cidadea > $cidadeb){ ?>
            <p class="alerta-vermelho">A cidade A é maior que B";</p>
        <?php }else{ ?> 
            <p class="alerta-verde">A cidade A é menor que B</p>
        <?php } ?>
        
			<a href="dadosCP.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>