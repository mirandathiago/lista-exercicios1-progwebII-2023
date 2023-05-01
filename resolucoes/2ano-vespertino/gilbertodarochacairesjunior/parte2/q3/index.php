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
		<h1>Formulário de Horario</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Horario</h2>
			<form action="index.php" method="post">
				<label for="nome">Insira seu nome</label>
				<input type="text" name="nome">
				<button> Enviar </button>
				<!-- Poderia apenas usar o required para não conseguir enviar o formulario sem preencher -->
			</form>
		</div>
		<div class="box resposta">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
				<p class="alerta-verde">
					<?php
					date_default_timezone_set('America/Sao_Paulo');
					$horas = 5;
					if ($horas >= 5 and $horas <= 12) {
						echo 'Bom dia ' . $_POST['nome'];
					} else if ($horas > 12 and $horas <= 18) {
						echo 'Bom Tarde ' . $_POST['nome'];
					} else if ($horas > 18 and $horas <= 23) {
						echo 'Bom noite ' . $_POST['nome'];
					} else if ($horas >= 0 and $horas < 5) {
						echo "Vá Dormir, está de Madrugada.";
					}
					?>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>