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
		<h1>Jogo de Par ou Ímpar</h1>
	</header>
	<div class="container">
		<!-- Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar".  -->
		<div class="box formulario">
			<h2>Faça suas escolhas</h2>
			<form action="resposta.php" method="GET">
				<label>Selecione um número:
					<select name="numero" required>
						<option></option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
			   </label>

			   <label>
				<input type="radio" name="escolha" value="Par" required>
				Par
			   </label>
			   <label>
				<input type="radio" name="escolha" value="Impar" required>
				Ímpar
			   </label>
				
			<button name="enviar"> Jogar </button>
			</form>
		</div>		
	</div>
</body>
</html>