<?php  
    $valor = $_GET["valor"] ?? 4;
    
    $met = $valor /2;
	$dob = $valor *2;
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário: Dobro e Metade</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado das Operações</h2>
            <?php 
                echo "<p> O valor digitado foi: {$valor} <br> Sua metade é {$met} e seu dobro é {$dob} </p>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>