<!--3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. 
Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. 
Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. 
Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes 
de fazer o pedido.-->

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
		<h1>Escolha o(s) sabor(es):</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="get"> <!--Método 'GET' as informações são passadas através de parâmetros de URL-->
			  <fieldset>
				<legend>Faça sua escolha:</legend>
				<div>
				  <input type="checkbox" id="quatroqueijos" name="sabores[]" value="Quatro queijos">
				  <label for="quatroqueijos">Quatro queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="Calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="Portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="Frango">
				  <label for="frango">Frango</label>
				</div>
				</fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Os sabores escolhidos foram:</h2>
			<?php
                $sabores = $_GET["sabores"] ?? [];
				//O foreach é uma função que percorre um array. Neste caso ele vai pegar cada uma das informações dos sabores escolhidos
                foreach($sabores as $sabor){ //Aqui é apresentado os sabores escolhidos pelo usuário
                    echo "<h3>{$sabor}</h3>";
                }
            ?>
		</div>
	</div>
</body>
</html>