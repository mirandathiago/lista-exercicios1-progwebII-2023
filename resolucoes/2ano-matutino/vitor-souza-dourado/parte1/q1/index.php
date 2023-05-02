
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<title>questao 1/parte 1 </title>
</head>
<body>
	<h4> QUESTÃO 1/ PARTE 1 </h4> 
	<form method="post" action="index.php">
		<label for="preco">Insira o preço original do produto:</label>
		<input type="text" name="preco" id="preco">
		<input type="submit" value="Calcular">
	</form>
	<?php 
		if(isset($_POST['preco'])) {
			$preco_original = $_POST['preco'];
			$desconto = $preco_original * 0.1;
			$preco_final = $preco_original - $desconto;
			echo "<p>O preço com desconto é R$ $preco_final</p>";
		}
	?>
	
</body>
</html>