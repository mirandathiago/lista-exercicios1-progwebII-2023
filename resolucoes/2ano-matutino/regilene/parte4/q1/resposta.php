<?php

	/*1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. 
	*/

?>

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
		<h1>Frutas</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Suas Frutas Favoritas</h2>

			<form action="resposta.php" method="post">
				
				<legend>Selecione suas frutas favoritas:</legend>

				<div>
				  <input type="checkbox" id="melancia" name="fruta1" value="melancia">
				  <label for="melancia">Melancia</label>
				</div>

				<div>
				  <input type="checkbox" id="morango" name="fruta2" value="morango">
				  <label for="morango">Morango</label>
				</div>

				<div>
				  <input type="checkbox" id="abacate" name="fruta3" value="abacate">
				  <label for="abacate">Abacate</label>
				</div>

				<div>
				  <input type="checkbox" id="abacaxi" name="fruta4" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>

				<div>
				  <input type="checkbox" id="laranja" name="fruta5" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>

				<div>
				  <input type="checkbox" id="manga" name="fruta6" value="manga">
				  <label for="manga">Manga</label>
				</div>

				<div>
				  <input type="checkbox" id="mamao" name="fruta7" value="mamao">
				  <label for="mamao">Mamão</label>
				</div>

				<div>
				  <input type="checkbox" id="acerola" name="fruta8" value="acerola">
				  <label for="acerola">Acerola</label>
				</div>

				<div>
				  <input type="checkbox" id="goiaba" name="fruta9" value="goiaba">
				  <label for="goiaba">Goiaba</label>
				</div>

				<div>
				  <input type="checkbox" id="maçã" name="fruta10" value="maçã">
				  <label for="maçã">Maçã</label>
				</div>

			  </fieldset>


				<button name="enviar"> Enviar </button>

			</form>

		</div>	
		
		<div class="box resposta">

			<h2>Frutas Selecionadas</h2>

				<?php
					
					foreach($_POST as $frutas){

						echo "<p>{$frutas}</p>";

					}

				?>

		</div>

	</div>

</body>
</html>