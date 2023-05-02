
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sorteio</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>PEDIDO DE PIZZA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preencha corretamente as informações abaixo:</h2>
			<form action="resposta.php" method="post">
			<fieldset>
				<legend>Selecione os sabores da pizza:</legend>
				<div>
				  <label for="dombasiliense">
				  <input type="checkbox" id="dombasiliense" name="sabores[]" value="dombasiliense">
				  Dombasiliense</label>
				</div>

				<div>
                  <label for="quatroqueijos">
				  <input type="checkbox" id="quatroqueijos" name="sabores[]" value="quatro queijos">
				  Quatro Queijos</label>
				</div>

				<div>
				  <label for="calabresa">
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  Calabresa</label>
				</div>

				<div>
				  <label for="frango">
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  Frango</label>
				</div>

				<div>
				  <label for="nordestina">
				  <input type="checkbox" id="nordestina" name="sabores[]" value="nordestina">
				  Nordestina</label>
				</div>

				<div>
				  <label for="mussarela">
				  <input type="checkbox" id="mussarela" name="sabores[]" value="mussarela">
				  Mussarela</label>
				</div>

				<div>
				  <label for="portuguesa">
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  Portuguesa</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>