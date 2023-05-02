
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Soma dos números de 1 a N</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Soma dos números de 1 a N</h1>
	<form method="post">
		<label for="numero">Informe um número inteiro:</label>
		<input type="number" id="numero" name="numero" required>
		<br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if (isset($_POST["numero"])) {
		$numero = $_POST["numero"];
		$soma = 0;
		for ($i = 1; $i <= $numero; $i++) {
			$soma += $i;
		}
		echo "<p>Soma dos números de 1 a $numero: $soma</p>";
	}
	/*Explicação do código:
O formulário é criado utilizando HTML e possui um campo "number" que permite ao usuário informar um número inteiro.
Quando o usuário clica no botão "Calcular", os dados do formulário são enviados para a página PHP.
No PHP, é verificado se o número informado pelo usuário foi enviado através do formulário (isset($_POST["numero"])). Se sim, o número é armazenado na variável $numero.
É criada uma variável $soma com valor inicial igual a 0.
Utilizando um laço de repetição for, a variável $soma é incrementada com cada número de 1 a $numero.
Por fim, é exibida na página a mensagem com a soma dos números de 1 a $numero.*/
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */
	?>
</body>
</html>