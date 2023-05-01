<!-- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.
 -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Pizzaria Só Rock</h1>
	</header>
	<div class="container">
		<div class="box formulario">
        <form action="receber1.php" method="get">
		<h2>Escolha o sabor de sua pizza! </h2>
        <input type="checkbox" name="pizza[]" value="parmesão">Parmesão<br>
        <input type="checkbox" name="pizza[]" value="bahiana">Bahiana<br>
        <input type="checkbox" name="pizza[]" value="bacon">Bacon<br>
        <input type="checkbox" name="pizza[]" value="calabresa">Calabresa<br>
        <input type="checkbox" name="pizza[]" value="frango-catupiry">Frango Catupiry<br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>