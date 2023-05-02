<?php

	$num1 = $_POST["num1"] ?? 0 ;

	$num2 = $_POST["num2"] ?? 0;

	$numpar = 0 ;

	$numtotal = 0 ;

	for($i = $num1; $i <= $num2; $i++){

		if($i % 2 == 0){

			$numpar ++;

		}

		$numtotal ++;

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Terceira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Conferir números pares</h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Números pares</h2>
			<?php	echo "O intervalo entre {$num1} e {$num2} possui o total de {$numtotal} números, sendo {$numpar} números pares";?>

            <a href="index.php" class="link">Voltar</a>

		</div>
		
	</div>

</body>
</html>