
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Par ou ímpar</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>JOGO DE PAR OU ÍMPAR</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha corretamente as informações abaixo:</h2>
			<form action="resposta.php" method="post">
				<label>Escolha um número entre 0 e 10:
					<input 
						type="number" 
						id="jogador" 
						name="jogador" 
						max=10 
						min=0 
						value=0 
						required>
				</label>

				<label for="opcao">Escolha uma opção:</label>
  					<select id="opcao" name="opcao">
						<option value="par">Par</option>
						<option value="impar">Ímpar</option>
  					</select>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>