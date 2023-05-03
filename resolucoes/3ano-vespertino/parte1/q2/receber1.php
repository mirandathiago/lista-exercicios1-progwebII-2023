<?php  
    $valor = $_GET["valor"] ?? 4;
    
    $metade = $valor /2;
	$dobro = $valor *2;
    
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
		<h1>Calculadora</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                echo "O valor inserido no sistema foi:	" .$valor;
                echo "<br>Seu dobro é:	". $dobro;
                echo "<br>A metade é:	". $metade . "<br>";
            ?>
			<a href="metadedobro.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>