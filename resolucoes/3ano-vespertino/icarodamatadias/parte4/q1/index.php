<?php
/*

1- Escreva um formulário que tenha um campo do tipo checkbox que permita que 
sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 
frutas para serem escolhidas). Em seguida processe a informação deste formulário 
utilizando o comando For Each para apresentar as frutas que foram escolhidas.




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
		
	</header>
	<div class="container">
		<div class="box formulario">

			<form action="resposta.php" method="get">

				<input type="checkbox" name="frutas[]" value="Kiwi">Kiwi<br>

				<input type="checkbox" name="frutas[]" value="Abacaxi">Abacaxi<br>
				
				<input type="checkbox" name="frutas[]" value="Pera">Pêra<br>
				
				<input type="checkbox" name="frutas[]" value="Bergamota">Bergamota<br>
				
				<input type="checkbox" name="frutas[]" value="Uva">Uva<br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>