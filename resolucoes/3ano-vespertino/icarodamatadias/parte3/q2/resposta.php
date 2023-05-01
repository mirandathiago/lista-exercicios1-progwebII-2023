<?php  
    $valor = $_GET["valor"] ;
	

    
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
				$a = 0;
                while ($a <= 10) {
					$resultado = $valor * $a;
					$a++;
                	echo "<br> ".$valor." x ".$a. "=". $resultado. "<br>";
					$resultado = 0;
				}
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>