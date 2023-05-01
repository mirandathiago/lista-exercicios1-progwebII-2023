<?php  
    $primeiro = $_GET["primeiro"] ?? 2;
	$segundo = $_GET["segundo"];
	$terceiro= $_GET["terceiro"];
	
	$array = [$primeiro, $segundo, $terceiro];

	$maior = 0;
	$menor = 10;

	for ($i=0; $i < count($array); $i++) { 
		if ($maior < $array[$i] ) {
			$maior = $array[$i];

		}elseif ($menor > $array[$i] ) {
			$menor = $array[$i];
		}
		
	}

	/*
	$maior = max($array);
	$menor = min($array);
	*/

    
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
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>O maior é ". $maior. "<br>";
				echo "<br>O menor é ". $menor. "<br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>