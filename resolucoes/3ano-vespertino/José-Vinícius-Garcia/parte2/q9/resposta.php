

<?php

$tempo = $_POST ["tempo"] ?? "";


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
		<h1>RESPOSTA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>A solução para você</h2>
<?php
switch($tempo){
	case "1":
		$clima = "Ensolarado";
		echo "<p class='alerta-amarelo'>O clima está {$clima}, Recomendamos ir ao clube! Bom sol.</p>";
		
			break;
	case "2":
		$clima = "Ameno";
		echo "<p class='alerta-amarelo'>O clima está {$clima}, Recomendamos ir ao parque! Bom descanso.</p>";
		break;
	case "3":
		$clima = "Chuvoso";
		echo "<p class='alerta-amarelo'>O clima está {$clima}, Recomendamos ir ao cinema! Bom filme.</p>";

		break;
	case "4":
		$clima = "Nublado";
		echo "<p class='alerta-amarelo'>O clima está {$clima}, Recomendamos ir ao museu! Bom aprendizado.</p>";
		break;
	case "5":
		$clima = "Tempestuoso";
		echo "<p class='alerta-amarelo'>O clima está {$clima}, Recomendamos ficar em casa e relaxar! bom descanso.</p>";

		break;
	}

	?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>