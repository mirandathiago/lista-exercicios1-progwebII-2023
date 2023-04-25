



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
		<h1>Par ou Impar</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Inicie o jogo:</h2>
			<form action="resposta.php" method="post">
			<label>número:
					<input type="number" id="num1" name="numuser" max="10" required>
				</label>

			  

			  <fieldset>
				<div>
				<legend>Selecione por qual torcerá que seja:</legend>
				<div>
				  <input type="radio" id="par" name="opcao" value="par" >
				  <label for="par">Par</label>
				</div>
				<div>
				  <input type="radio" id="impar" name="opcao" value="impar"> 
				  <label for="impar">Impar</label>
				</div>
			  </fieldset>
			  

			  
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
</body>
</html>