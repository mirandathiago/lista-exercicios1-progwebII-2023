<?php
$frutas = $_POST['frutas'];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas favoritas</h2>
			<form method="post" action="./index.php">
				<input type="checkbox" name="frutas[]" value="banana">Banana<br>
				<input type="checkbox" name="frutas[]" value="morango">Morango<br>
				<input type="checkbox" name="frutas[]" value="maçã">Maçã<br>
				<input type="checkbox" name="frutas[]" value="laranja">Laranja<br>
				<input type="checkbox" name="frutas[]" value="uva">Uva<br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Frutas favoritas</h2>
			<?php
			if ($frutas) {
				foreach ($frutas as $fruta) {
					echo $fruta . "<br>";
				}
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>