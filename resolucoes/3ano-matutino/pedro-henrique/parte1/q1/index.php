
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
		<h1>Lojinha do Seu Nelson</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Digite o preço que tomará o desconto de 10%</h2>
			<form action="receber1.php" method="get">
			<input type="number" name="preco" id="preco">
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>