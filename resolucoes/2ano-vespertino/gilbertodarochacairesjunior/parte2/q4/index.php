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
		<h1>Formulário de Bhaskara</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Bhaskara</h2>
			<form action="index.php" method="post">
				<label for="numeroA">Insira A</label>
				<input type="number" name="numeros[]">
				<label for="numeroB">Insira B</label>
				<input type="number" name="numeros[]">
				<label for="numeroC">Insira C</label>
				<input type="number" name="numeros[]">
				<button> Enviar </button>
				<!-- Poderia apenas usar o required para não conseguir enviar o formulario sem preencher -->
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<?php if (!in_array(null, $_POST['numeros'])) { ?>
					<p class="alerta-verde">
						<?php
						$delta = pow($_POST['numeros']['1'], 2) - 4 * $_POST['numeros']['0'] * $_POST['numeros']['2'];

						if ($delta < 0) {
							echo "Não possui raiz real";
						} else if ($delta == 0) {

							$XII = (-$_POST['numeros']['1'] + sqrt($delta)) / (2 * $_POST['numeros']['0']);
							echo "X = {$XII} Só possui uma raiz real";
						} else {
							$XI = (-$_POST['numeros']['1'] - sqrt($delta)) / (2 * $_POST['numeros']['0']);
							echo "X' = {$XI} </br>";
							$XII = (-$_POST['numeros']['1'] + sqrt($delta)) / (2 * $_POST['numeros']['0']);
							echo "X'' = {$XII}";
						}
						?>
					</p>
				<?php } else { ?>
					<p class="alerta-vermelho">
						Numeros Invalidos
					</p>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</body>

</html>