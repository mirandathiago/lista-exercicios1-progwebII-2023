<?php  
    $p1 = $_GET["p1"] ?? 10;
	$n1 = $_GET["n1"] ?? 6;
	$p2 = $_GET["p2"] ?? 10;
	$n2 = $_GET["n2"] ?? 6;
	$p3 = $_GET["p3"] ?? 10;
	$n3 = $_GET["n3"] ?? 6;


	$media= (($p1*$n1) + ($p2*$n2) + ($p3*$n3)) / ($p1+$p2+$p3);
    
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
		<h1>Resultado da média final</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>A média do aluno é:	". $media . "<br>";
            ?>
			<a href="media.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>