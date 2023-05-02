<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$a = $_POST["A"];

	$b = $_POST["B"];

	$c = $_POST["C"];
}


?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Quarta questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Formulário para resolução de equação do 2° grau</h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Resultado:</h2>


			<?php

		if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {

			echo "<p>Por favor, informe valores numéricos para os campos A, B e C.</p>";

		} else {
	
			$delta = pow($b, 2) - 4 * $a * $c;
			
			if ($delta < 0) {

				echo "<p>A equação não possui raízes reais.</p>";

			} else if($delta == 0){

				$x = -$b / (2*$a);

				echo"<p>A equação tem apenas uma raiz real, sendo ela {$x}</p>";

			}else if($delta > 0){

				$x1 = (-$b + sqrt($delta)) / (2 * $a);
				$x2 = (-$b - sqrt($delta)) / (2 * $a);

				echo "<p>As raízes da equação são:</p>";
				echo "<p>X1 = $x1</p>";
				echo "<p>X2 = $x2</p>";

				}

			}


		?>
            <a href="index.php" class="link">Voltar</a>

		</div>

	</div>

</body>
</html>