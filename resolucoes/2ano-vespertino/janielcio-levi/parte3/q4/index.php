<?php
	$num = $_POST["num"] ?? 0;
	$cont = 0;
	for ($i=1; $i <= $num; $i++) { 
		$cont+=$i;
	}
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
		<h1>Soma Sequencial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Soma sequecial de N</h2>
			<form action="index.php" method="post">
				<label>Insira o valor de N:
					<input type="number" id="num" name="num" min="1" required>
				</label>
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						echo "<h3>A soma do numeros de 1 a {$num} é : {$cont}</h3>";
					}
				?>
		</div>
	</div>
</body>
</html>