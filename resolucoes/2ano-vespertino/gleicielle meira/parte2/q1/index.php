<?php

$numero1 = $_POST ["numero1"] ?? 0;
$numero2 = $_POST ["numero2"] ?? 0;
$numero3 = $_POST ["numero3"] ?? 0;


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
		<h1>Verificador de números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os números:</h2>
		<form action="index.php" method="post">
				<label>Número 1:
					<input type="number" id="numero1" name="numero1" required>
				</label>

				<label>Número 2:
					<input type="number" id="numero2" name="numero2" required>
				</label>

				<label>Número 3:
					<input type="number" id="numero3" name="numero3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
			<h2>Resposta</h2>

			<?php

			if ($_SERVER ["REQUEST_METHOD"] == "POST"){

         $maior = $numero1;

		

		 if ($maior <= $numero2) {

		 $maior = $numero2;

		 }

		 if ($maior <= $numero3) {

			$maior = $numero3;
			
			}

		 $menor = $numero1;

		 if($menor >= $numero2 ){

			$menor = $numero2;
		 }

		 if($menor >= $numero3){

			$menor = $numero3;
		 }
			
			echo "<p> Menor número: {$menor} e o Maior número: {$maior} </p>" ;

		}
			?>

		
		</div>
	</div>

</body>
</html>