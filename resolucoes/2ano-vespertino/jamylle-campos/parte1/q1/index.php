<?php
	$valor=$_POST["valor"] ?? 0;
	$desconto=$valor*0.9;
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
		<h1>Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira</h2>
			<form action="index.php" method="post">
				<label>Valor do produto:
					<input type="number" id="valor" name="valor" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "Valor do produto com desconto: " .$desconto. " reais";
			?>
			
		</div>
	</div>
</body>
</html>