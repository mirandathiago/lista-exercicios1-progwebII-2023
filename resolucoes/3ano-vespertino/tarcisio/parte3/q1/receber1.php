<?php  
    $valor = $_GET["valor"];

	$resultado = 1;

	if ($valor == 0) {
		
	} else {
		
	
	for ($i= 1; $i <= $valor; $i++) { 
		$resultado *= $i;
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
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>O valor inserido foi ". $valor. "<br>";
				echo "<br>O seu fatorial é ". $resultado. "<br>";
            ?>
			<a href="fatorial.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>