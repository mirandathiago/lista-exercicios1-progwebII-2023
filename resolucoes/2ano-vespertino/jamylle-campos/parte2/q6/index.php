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
		<h1>Verificando Triângulos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Lado 1:
					<input type="number" id="lado1" name="lado1" required>
				</label>
				<label>Lado 2:
					<input type="number" id="lado2" name="lado2" required>
				</label>
				<label>Lado 3:
					<input type="number" id="lado3" name="lado3" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$lado1 = $_POST["lado1"]??0;
				$lado2 = $_POST["lado2"]??0;
				$lado3 = $_POST["lado3"]??0;
				
				if($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
					if($lado1 == $lado2 && $lado1 == $lado3) {
							echo "<p>É possível formar um triângulo equilátero.</p>";
						} else if($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
								echo "<p>É possível formar um triângulo isósceles.</p>";
						} else {
								echo "<p>É possível formar um triângulo escaleno.</p>";
							}
					} else {
							echo "<p>Não é possível formar um triângulo.</p>";
						}	

			?>
		</div>
	</div>
</body>
</html>