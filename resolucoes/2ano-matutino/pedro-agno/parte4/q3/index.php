
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="get">

			   <fieldset>
				<legend>Selecione sua pizza em nosso cardápio =D:</legend>
				<div>
				  <input type="checkbox" id="pizza" name="pizza[]" value="Carne Seca">
				  <label for="Carne Seca">Carne Seca</label>
				</div>
				<div>
				  <input type="checkbox" id="pizza" name="pizza[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="pizza" name="pizza[]" value="Frango Com Catupiry">
				  <label for="Frango">Frango com Catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="pizza" name="pizza[]" value="Peperone">
				  <label for="Peperone">Peperone</label>
				</div>
				<div>
				  <input type="checkbox" id="pizza" name="pizza[]" value="Chocolate">
				  <label for="Chocolate">Chocolate</label>
				</div>
			  </fieldset>

				<label>Faça aqui alguma anotação sobre o seu pedido:
					<textarea placeholder="Opcional =D" id="mensagem" name="mensagem"></textarea>

					<script>
  						const mensagem = document.getElementById('mensagem');
  						mensagem.addEventListener('focus', function() {
  					    mensagem.placeholder = '';
					    });
					</script>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>