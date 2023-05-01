<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora IMC (Índice de Massa Corporal)</h1>
	</header>
	<div class="container">
		
		<div class="box formulario">

			<form action="resposta.php" method="post">
				<label>Informe seu Peso:
					<input type="number" id="peso" name="peso" required>
				</label>

                <label>Informe sua Altura (em cm):
					<input type="number" id="altura" name="altura" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>