<?php
	$numero = $_GET["numero"] ?? 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada do <?=$numero?></h2>
            <br>
            <?php
                $i = 0;

                while ($i <= 10) {
                $resultado = $numero * $i;
                echo "$numero X $i = $resultado <br>";
                $i++;
                }
            ?>

            
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>