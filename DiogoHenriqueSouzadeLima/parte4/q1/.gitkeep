1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. 


<!DOCTYPE html>
<html>
<head>
	<title>Selecione suas frutas favoritas</title>
</head>
<body>
	<form method="post">
		<label for="frutas">Escolha suas frutas favoritas:</label><br>
		<input type="checkbox" name="frutas[]" value="manga">Manga<br>
		<input type="checkbox" name="frutas[]" value="morango">Morango<br>
		<input type="checkbox" name="frutas[]" value="abacaxi">Abacaxi<br>
		<input type="checkbox" name="frutas[]" value="uva">Uva<br>
		<input type="checkbox" name="frutas[]" value="laranja">Laranja<br><br>
		<input type="submit" name="submit" value="Enviar">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$frutas = $_POST['frutas'];
		if(!empty($frutas)){
			echo "Você escolheu as seguintes frutas:<br>";
			for($i=0; $i<count($frutas); $i++){
				echo "- " . $frutas[$i] . "<br>";
			}
		}
		else {
			echo "Por favor, escolha suas frutas favoritas.";
		}
	}
	?>
</body>
</html>