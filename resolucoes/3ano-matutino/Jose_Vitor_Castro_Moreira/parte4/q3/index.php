<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha os sabores:</h2>
			<form action="index.php" method="get">

			   <fieldset>
				<h3>Sabores de Pizzas:</h3>
				<div>
				  <input type="checkbox" id="calabresa" name="pizzas[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="pizzas[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="baiana" name="pizzas[]" value="baiana">
				  <label for="baiana">Baiana</label>
				</div>
				<div>
				  <input type="checkbox" id="vegetariana" name="pizzas[]" value="vegetariana">
				  <label for="vegetariana">Vegetariana</label>
				</div>
				<div>
				  <input type="checkbox" id="napolitana" name="pizzas[]" value="napolitana">
				  <label for="napolitana">Napolitana</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			
				if($metodo == "GET" && isset($_GET["enviar"])){
					$pizza = $_GET["pizzas"];
					echo "<p>Os sabores escolhidos foram:</p>";
					foreach($pizza as $pizzas){
						echo "$pizzas<br>";
					}
				}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>