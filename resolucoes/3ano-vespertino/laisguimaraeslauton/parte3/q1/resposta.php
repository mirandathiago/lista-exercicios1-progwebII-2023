<?php

	$num1 = $_POST["num1"] ?? 0 ;

	$numfatorial = $num1 * ($num1-1);
	
		if($num1 == 0){

		$numfatorial =1;

		}else{

			for($i=2; $i < $num1; $i++){

			$numfatorial =$numfatorial * ($num1-$i);
		}
	}
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Primeira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Formulário para descobrir maior e menor número </h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Maior e menor número</h2>

			<?php echo"<p> O número a ser fatorado foi: {$num1}<br> O resultado foi: {$numfatorial} </p>"?>

            <a href="index.php" class="link">Voltar</a>

		</div>

	</div>

</body>
</html>