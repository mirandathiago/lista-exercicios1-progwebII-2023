<?php
/*1-	Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. 
(Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each
 para apresentar as frutas que foram escolhidas. */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Frutas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutas Preferidas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action = "index.php" method = "get"> 
			  <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="acerola" name="frutas[]" value="Acerola"> <!-- Envia vários valores pois é um array -->
				  <label for="acerola">Acerola</label><!-- for liga o id do imput com o label -->
				</div>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="Banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="tangerina" name="frutas[]" value="Tangerina">
				  <label for="tangerina">Tangerina</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="Morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas[]" value="Uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas[]" value="Abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="Laranja">
				  <label for="laranja">Laranja</label>
				</div>
				<div>
				  <input type="checkbox" id="abacate" name="frutas[]" value="Abacate">
				  <label for="abacate">Abacate</label>
				</div>
				<div>
				  <input type="checkbox" id="kiwi" name="frutas[]" value="Kiwi">
				  <label for="kiwi">Kiwi</label>
				</div>
			  </fieldset>
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Suas frutas favoritas são:</h2>
			<?php
                $frutas = $_GET["frutas"] ?? []; //recupera o valor no array e atribui à variável frutas
                foreach($frutas as $fruta){ //para cada elemento do array frutas, passe cada um para a variavel fruta 
                    echo "<h3>{$fruta}</h3>"; //e imprima; 1 por 1; 
                }
            ?>
		</div>
	</div>
</body>
</html>
