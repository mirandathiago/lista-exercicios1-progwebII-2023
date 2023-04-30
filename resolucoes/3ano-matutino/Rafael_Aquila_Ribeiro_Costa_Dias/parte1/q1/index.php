<?php
/*Pedro precisa calcular o preço de um produto com um desconto de 10%. 
Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
Entrada: Preço original: R$ 50,00
Saída: Preço com desconto: R$ 45,00*/

		if (isset($_POST['preco'])) {
			$preco = $_POST['preco'];
			$preco_desconto = $preco * 0.9;
		}
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calcular desconto</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>


<body>
	<header>
		<h1>Calculadora de desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe o preço</h2>
			<h1>Calcular desconto</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="preco">Preço original:</label>
		<input type="text" name="preco" id="preco"><br><br>
		<input type="submit" value="Calcular">
	</form>
	<h2>Desconto</h2>
			<?php
			echo "<p>Preço com desconto: R$ " . number_format($preco_desconto, 2, ',', '.') . "</p>";
			?>
</body>
</html>
