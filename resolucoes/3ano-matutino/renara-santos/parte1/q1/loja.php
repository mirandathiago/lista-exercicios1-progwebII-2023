
<!DOCTYPE html>

 <!--Pedro precisa calcular o preço de um produto com um desconto de 10%. 
Crie um formulário que receba o preço original do produto e calcule 
o preço final com o desconto aplicado.
Entrada: Preço original: R$ 50,00
Saída: Preço com desconto: R$ 45,00-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Loja da Nara</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Aqui qualquer produto tem 10% de desconto, por favor digite o valor da compra!:</h2>
			<form action="receber.php" method="post">
			<input type="number" name="preco" id="preco">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>