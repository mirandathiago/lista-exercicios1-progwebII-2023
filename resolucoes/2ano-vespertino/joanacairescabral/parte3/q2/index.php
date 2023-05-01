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
		<h1>Calculando Soma</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Informe um número inteiro:
					<input type="number" id="num" name="num" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
				<?php
					$soma = 0; //elemento neutro da adição para realizar inicialização
					$numero = $_POST['num'] ?? 0;
					for($i = 1; $i <= $numero; $i++){
						$soma += $i;
					}
					echo "<p>Soma dos números de 1 a " . $numero . ": " . $soma."</p>"; //usado operador de concatenação
				?>
		</div>
	</div>
</body>
</html>