<?php
	$cel = $_POST["cel"] ?? 0;
	$faren = round(($cel * 9/5) + 32,2);
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
		<h1>Calculadora de Temperatura</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os dados</h2>
			<form action="index.php" method="post">
				<label> insira a temperatura em celsius:
					<input type="text" id="tempe" name="cel" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				echo "<p class='alerta-verde'>$faren</p>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>