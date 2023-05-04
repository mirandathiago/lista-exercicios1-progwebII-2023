<?php  
    $a =$_GET["a"];

	$resultado = 0;

	for ($i=0; $i <= $a; $i++) { 
		$resultado += $i;
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
                
                echo "<br>Soma = ". $resultado. "<br>";
            ?>
			<a href="soma.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>