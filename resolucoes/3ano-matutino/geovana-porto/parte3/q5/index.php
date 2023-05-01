<?php

$divida = $_POST["divida"] ?? 0;
$juros = $_POST["juros"] ?? 0;
$valormensal = $_POST["valormensal"] ?? 0;
$tempo = 0;


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
		<h1>Formulário de dívida</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Dívida</h2>
			<form action="index.php" method="post">
				<label>Valor da dívida(R$):
					<input type="number" id="divida" name="divida" step="0.01" required>
				</label>

				<label>Juros cobrado(%):
					<input type="number" id="juros" name="juros" required>
               </label>
			   <label>Valor a ser pago mensalmente(R$):
					<input type="number" id="valormensal" name="valormensal" step="0.01"required>
               </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {

			while($divida > 0){
		    $divida -= $valormensal;
		    $divida += $divida * ($juros/100);
			$tempo++;

			}
			echo"Serão necessários $tempo meses para quitar a dívida.";
			}
		
?>

		</div>
	</div>
</body>
</html>