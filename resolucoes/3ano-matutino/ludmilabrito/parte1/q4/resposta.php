<?php  
    $distancia = $_GET["distancia"] ?? 500;
	$eficiencia = $_GET["eficiencia"] ?? 10;

	$quantidadeL = $distancia / $eficiencia;
	
    
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
		<h1>Gasto em litros da viagem</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>O gasto de combustível foi de ". $quantidadeL . "L<br>";
            ?>
			<a href="combustivel.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>