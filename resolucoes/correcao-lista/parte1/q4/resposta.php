<?php

    $msg = "<p class='alerta-vermelho'>Retorne ao Formulário para enviar os dados</p>";
   

	if(isset($_GET["enviar"])){

		$consumo = $_GET["consumo"] ?? 0.1;
		$distancia = $_GET["distancia"] ?? 0.1;

		$combustivel = $distancia / $consumo;
		$combustivel = number_format($combustivel,2);

		$msg = "<p class='alerta-amarelo'>Para percorrer uma distância de {$distancia}km em um carro com o consumo médio de {$consumo}km/l será necessário {$combustivel} litros</p>";

	}
	$msg .= "<a href='index.php' class='link'>Voltar</a>";


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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?=$msg?>

		</div>
	</div>
</body>
</html>