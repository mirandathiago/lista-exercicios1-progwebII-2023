<?php  
    $segundos =$_GET["tempo"];
	
	$horas = 0;
	$minutos = 0;

	while ($segundos >= 3600) {
		$segundos -= 3600;
		$horas++;
	}
	while ($segundos >= 60) {
		$segundos -= 60;
		$minutos++;
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
                
                echo "<br>O tempo para produção foi de ".$horas.":".$minutos.":".$segundos."<br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>