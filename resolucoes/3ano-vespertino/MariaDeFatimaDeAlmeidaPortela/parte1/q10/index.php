<?php
	$valor = $_POST["valor"] ?? 1;
	  $mes = $_POST["mes"] ?? 1;
	$tx = 0.025;
	$total = round($valor * pow((1+$tx), $mes),2);
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
		<h1>Calculadora de Juros</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2> uros Compostos</h2>
			<form action="index.php" method="post">
				<label>emprestimo:
					<input type="text" id="nome" name="valor" required>
				</label>
				<label>Meses:
					<input type="text" id="nome" name="mes" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>total a se pagar</h2>
			<?php
				echo "<p class='alerta-verde'>$total</p>";
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>