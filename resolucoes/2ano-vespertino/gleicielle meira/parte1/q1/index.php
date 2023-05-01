<?php


$precooriginal = $_POST["precooriginal"] ?? 0;

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>preço com desconto</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>calcular preço com desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o valor:</h2>
			<form action="index.php" method="post">
				<label> Preço original:
					<input type="number" id="precooriginal" name="precooriginal" required>
				</label>

			<button name ="enviar"> CALCULAR DESCONTO </button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php


			$precodesconto = $precooriginal * 0.9; // desconto de 10%
			echo "<p> O preço com desconto será: {$precodesconto} </p>";


		?>
			
		</div>


		
	</div>
</body>
</html>