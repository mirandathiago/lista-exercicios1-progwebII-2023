<?php
	$numero = $_POST["numero"] ?? 3;
	
	// Fatorial -> n! = n x (n – 1) x (n – 2) x (n – 3)!
	if($numero == 0){
		$fatorial = 1;
	}else{
		$fatorial = 1;
		for($i=1;$i<=$numero;$i++){
			$fatorial *= $i; // O mesmo que: $fatorial = $fatorial * $i
		}
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
		<h1>Calculadora de Fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Fatorial</h2>
			<p><?=$fatorial?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>