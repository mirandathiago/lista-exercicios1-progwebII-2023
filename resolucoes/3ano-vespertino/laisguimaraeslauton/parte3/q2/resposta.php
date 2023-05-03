<?php

$num1 = $_POST["num1"] ?? 0 ;

	$i=1;

?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Segunda questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Execução da tabuada</h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Tabuada</h2>


			<?php
			
			while ($i <= 10) {

				$result = $num1 * $i;

				echo "<h3>{$num1} x {$i} = {$result}</h3>";

				$i++;

			}
		

			?>


            <a href="index.php" class="link">Voltar</a>

		</div>

	</div>

</body>

</html>