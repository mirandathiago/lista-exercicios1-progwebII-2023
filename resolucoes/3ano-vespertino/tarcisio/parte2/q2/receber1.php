<?php  
    $consumo = $_GET["consumo"] ?? 100;
	
	
	if ($consumo > 200) {
		
		$valor = $consumo * 0.87;
		
	}elseif ($consumo > 100 && $consumo <200) {
		
		$valor = $consumo * 0.70;
		
	}elseif ($consumo <=100) {
		
		$valor = $consumo * 0.50;
	}
	//Teoricamente tem que somar 20 ao valor da tarifa, mas dessa forma o if a seguir seria
	//inutilizavel, faltou algo nas instruções professor?

	if ($valor < 20) {
		$valor = 20;
	}
	$valor = number_format($valor, 2, ",", ".");

    
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
                
                echo "<br>O consumo foi ". $consumo. "KWh<br>";
				echo "<br>O valor a ser pago é de R$". $valor. "<br>";
            ?>
			<a href="energia.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>