<?php

	$numA = $_GET["numA"] ?? "";
	$numB = $_GET["numB"] ?? "";
	$numC = $_GET["numC"] ?? "";


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
		<h1>Questão 4 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.</h2>
			<form action="resposta.php" method="get">
				<label>A:
					<input type="text" id="numA" name="numA" required value="<?=$numA?>">
				</label>
				<label>B:
					<input type="text" id="numB" name="numB" required value="<?=$numB?>">
				</label>
				<label>c:
					<input type="text" id="numC" name="numC" required value="<?=$numC?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>