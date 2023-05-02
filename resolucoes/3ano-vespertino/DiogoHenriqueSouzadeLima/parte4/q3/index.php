3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.

<!DOCTYPE html>
<html>
<head>
	<title>Seleção de sabores de pizza</title>
</head>
<body>
	<form method="post">
		<label for="sabores">Escolha os sabores desejados:</label><br>
		<input type="checkbox" name="sabores[]" value="pererone">Peperone<br>
		<input type="checkbox" name="sabores[]" value="calabresa">Calabresa<br>
		<input type="checkbox" name="sabores[]" value="atum">Atum<br>
		<input type="checkbox" name="sabores[]" value="frango">Frango<br>
		<input type="checkbox" name="sabores[]" value="portuguesa">Portuguesa<br><br>
		<input type="submit" name="submit" value="Enviar">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$sabores = $_POST['sabores'];
		if(!empty($sabores)){
			echo "Você escolheu os seguintes sabores de pizza:<br>";
			foreach($sabores as $sabor){
				echo "- " . $sabor . "<br>";
			}
		}
		else {
			echo "Por favor, selecione os sabores desejados.";
		}
	}
	?>
</body>
</html>