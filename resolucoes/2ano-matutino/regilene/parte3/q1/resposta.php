<?php
	$numero1 = $_POST["numero1"] ?? 0 ;
	$fatorial = $numero1 * ($numero1-1);

		if($numero1 == 0){

		$fatorial =1;

		}else{

			for($i=2; $i < $numero1; $i++){

			$fatorial = $fatorial * ($numero1-$i); 
			 
		}
	}
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Número Fatorial</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1>Fatoral</h1>
	</header>

	<div class="container">
		<div class="box resposta">

			<h2>Número Fatoral</h2>
			
			<?php echo"<p> O número a ser fatoriado foi: {$numero1}<br> O resultado foi: {$fatorial} </p>"?>

            <a href="index.php" class="link">Voltar</a>

		</div>
	</div>

</body>
</html>