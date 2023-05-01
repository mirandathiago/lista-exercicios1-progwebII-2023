<?php
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	$npar = 0 ;
	// utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
	for($i = $n1; $i <= $n2; $i++){
		if($i % 2 == 0){
			$npar ++;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para conferência de números pares</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada</h2>
			<?php	echo "O intervalo entre {$n1} e {$n2}, tem {$npar} números pares";?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>