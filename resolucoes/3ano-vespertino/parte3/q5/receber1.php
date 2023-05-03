<?php  
    $valor = $_GET["valor"]?? 5000;
	$quantia = $_GET["quantia"] ?? 200;

	$juro = 2;

	$meses = 0;

	while ($valor > 0) {
		$valor -= $quantia;
		$valor += $valor * ($juro /100);
		$meses++;
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
                
                echo "<br>O tempo nesscessário para quitar a dívida é de ".$meses." meses <br>";

            ?>
			<a href="divida.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>