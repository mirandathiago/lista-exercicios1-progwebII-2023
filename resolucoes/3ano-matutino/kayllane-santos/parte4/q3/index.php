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
		<h1>Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="resposta.php" method="POST">
			   <fieldset>
				<legend>Selecione o sabor de pizza desejado</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="marguerita" name="sabores[]" value="marguerita">
				  <label for="marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" id="mucarela" name="sabores[]" value="mucarela">
				  <label for="mucarela">Muçarela</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango com Catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="carneseca" name="sabores[]" value="carneseca">
				  <label for="carneseca">Carne Seca</label>
				</div>
				<div>
				  <input type="checkbox" id="napolitana" name="sabores[]" value="napolitana">
				  <label for="napolitana">Napolitana</label>
				</div>
			  </fieldset>

				<label>Observações:
					<textarea id="mensagem" name="mensagem"></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>