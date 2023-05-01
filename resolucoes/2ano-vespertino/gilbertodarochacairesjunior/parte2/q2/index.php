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
		<h1>Formulário de KWh</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>KWh</h2>
			<form action="index.php" method="post">
				<label for="uso">Insira o uso em KWh</label>
				<input type="number" name="uso">
				<button> Enviar </button>
				<!-- Poderia apenas usar o required para não conseguir enviar o formulario sem preencher -->
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					$pagar = 20;
					if ($_POST['uso'] < 100) {
						$pagar += $_POST['uso'] * 0.50;
					} else if ($_POST['uso'] < 200) {
						$pagar += $_POST['uso'] * 0.70;
					} else {
						$pagar += $_POST['uso'] * 0.87;
					}
					echo "Valor a ser pago, considerando taxa minima de R$20 : <br>";
					echo "R$ {$pagar}";
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>