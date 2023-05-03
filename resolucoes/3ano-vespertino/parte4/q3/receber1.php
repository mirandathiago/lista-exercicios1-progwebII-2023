<?php  
    $inicio = $_GET["inicio"];
	$fim = $_GET["fim"];

	$pares = 0;

	for ($inicio; $inicio <= $fim; $inicio++) { 
		if ($inicio % 2 == 0) {
			$pares++;
		}
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
		
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>
            <?php 
                
                echo"<br> O inervalo possui ".  $pares . " números pares<br>";
            ?></h2>
			<a href="date.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>