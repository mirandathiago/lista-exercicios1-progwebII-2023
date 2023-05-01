<?php

$consumo = $_POST ["consumo"] ?? 0;

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
		<h1>Calculador de conta de energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os dados:</h2>
			<form action = "index.php" method = "post">
				<label>Consumo:
					<input type="number" id="consumo" name="consumo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

			if ($consumo <=100){

				$valor = $consumo * 0.5;

			} else if ($consumo <=200){

				$valor = $consumo * 0.7;

			} else{ 
				
				$valor = ($consumo) * 0.87;

			}
		     if($valor <= 20){

            $valor = 20;

			}

		echo  "<p> O valor da conta de energia é de R$: {$valor} </p>";

		}
		?>
			
		</div>
	</div>
</body>
</html>