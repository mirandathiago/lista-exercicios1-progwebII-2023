<?php
    $numero1 = $_GET["numero"] ?? 5;
    $numero2 = 0;

    if($numero1 > 0){
        for ($i = 0; $i <= $numero1; $i++) {
            $numero2 += $i;
        }
    }else if($numero1 < 0){
        for ($i = 0; $i >= $numero1; $i--) {
            $numero2 += $i;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 4</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Contagem até N</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<p> A soma de 1 até <?=$numero1?> = <?=$numero2?></p>

			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>