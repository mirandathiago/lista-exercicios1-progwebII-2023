



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
		<h1> Dobro e metade de um número</h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Dobro e metade de um número</h2>

            <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	
$numero = $_POST["num1"];
		$dobro = $numero * 2;
		$metade = $numero / 2;
		echo "<h2>O dobro de $numero é: $dobro</h2>";
		echo "<h2>A metade de $numero é: $metade</h2>";
	}
	
	
?>

		</div>

	</div>

</body>
</html>