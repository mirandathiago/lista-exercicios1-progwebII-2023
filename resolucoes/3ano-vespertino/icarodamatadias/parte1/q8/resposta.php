<?php  
    $produto = $_GET["produto"] ?? 1000.00;
	$parcelas = $_GET["parcelas"] ?? 0;

	$valor = $produto + ($produto * ($parcelas * 0.04));
	
    
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
                
                echo "<br>O valor a ser pago pelo produto é de R$". $valor ."<br>";
				echo "<br>Dividido em ".$parcelas." parcelas<br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>