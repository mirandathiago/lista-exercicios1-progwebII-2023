<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$CelTemp = $_POST["CelTemp"] ?? 0;

	$FarenTemp = round(($CelTemp * 9/5) + 32,2);
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				<label>Temperatura em Celsius:
					<input type="text" id="tempe" name="CelTemp" required value="<?=$CelTemp?>">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Temperatura Calculada</h2>
			<?php
				if($metodo == "POST"){
					echo "<p class='alerta-verde'>$FarenTemp</p>";
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>