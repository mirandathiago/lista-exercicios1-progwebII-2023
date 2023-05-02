<?php
	/*
Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário 
que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit
 e exiba na tela.
Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
Exemplo:
Entrada:Temperatura em Celsius: 25
Saída:Temperatura em Fahrenheit: 77°F



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
		<h1>Conversor de temperatura!</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>CONVERSOR</h2>
			<form action="resposta.php" method="post">
				<label>Calcule Celsius para Fahrenheit!:
					<input type="number" id="celsius" name="celsius" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>