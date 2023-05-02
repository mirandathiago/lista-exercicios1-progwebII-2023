<?php
	/*
	7- Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
	Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
	Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
	Exemplo:
	Entrada:Temperatura em Celsius: 25
	Saída:Temperatura em Fahrenheit: 77°F
	*/
		$celsius = $_POST["celsius"] ?? 0;
		$fahrenheit = ($celsius * 9/5) + 32;
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
		<h1>Questão 7 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Informe os itens solicitados</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Temperatura em graus Celsius:
					<input type="number" name="celsius" value="<?= $celsius ?>" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Temperatura em Fahrenheit:</p>
			<p class="alerta-verde"><?=$fahrenheit?></p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>