<?php  
   
	$nomes = $_GET['nomes'];

	$nomes_array = explode("\n", $nomes); 

	$num_nomes = count($nomes_array);

	$posicao = rand(0, $num_nomes - 1);

	$ganhador = $nomes_array[$posicao];	

    
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
				echo "<br>O ganhador foi ".$ganhador." <br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>