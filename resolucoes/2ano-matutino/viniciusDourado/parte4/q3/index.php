<!-- 3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pizzaria</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Pedido de Pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha os Sabores</h2>
			<form action="index.php" method="get">
			<div>
				<!-- pizza[] significa que varios sabores podem ser selecionados e armazenados nesse vetor-->
				  <input type="checkbox" id="frango" name="pizza[]" value="frango">
				  <label for="frango">Frango</label>
			</div>
			<div>
				  <input type="checkbox" id="baiana" name="pizza[]" value="baiana">
				  <label for="baiana">Baiana</label>
			</div>
			<div>
				  <input type="checkbox" id="caipira" name="pizza[]" value="caipira">
				  <label for="caipira">Caipira</label>
			</div>
			<div>
				  <input type="checkbox" id="quatro queijos" name="pizza[]" value="quatro queijos">
				  <label for="quatro queijos">Quatro Queijos</label>
			</div>
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Pedido</h2>
			<?php
			$pizza = $_GET["pizza"] ?? [];
			 //foreach -> para cada elemento do array pegue um elemento de cada vez e coloque seu valor em uma variavel definida no comando.
			 foreach($pizza as $sabores){
				echo"<h3>{$sabores}</h3>";
			 }
			?>
		</div>
	</div>
</body>
</html>