<?php
	$preco=$_POST["preco"] ?? 0;
	$desconto=$preco*0.9;

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
		<h1>Formulário</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Desconto</h2>
			<form action="index.php" method="post">
				<label>Qual o preço original do produto?:
					<input type="number" id="preco" name="preco" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>valor com desconto</h2>
			<?= "<p> O desconto foi de: {$desconto} reais</p>"; ?>
		</div>
	</div>
</body>
</html>