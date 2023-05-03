<?php  
    $hora = date('H');
	if ($hora <= 4) {
		$resposta = "Vá dormir, está de madrugada";
	}elseif ($hora >= 5 && $hora <= 12) {
		$resposta = "Bom Dia";
	}elseif ($hora >=13 && $hora <= 18) {
		$resposta = "Boa Tarde";
	}elseif ($hora >18 && $hora < 23) {
		$resposta = "Boa Noite";
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
			<h1>
            <?php 
                
                echo  $resposta . "<br>";
            ?></h1>
			<a href="date.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>