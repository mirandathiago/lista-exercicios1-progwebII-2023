<!--
    Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
    Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
    Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
    Exemplo:
    Entrada:Temperatura em Celsius: 25
    Saída:Temperatura em Fahrenheit: 77°F
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Combustivel</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            <form action="index.php" method="POST">
                <label for="celsius">Temperatura em Celsius: </label>
		        <input type="number" name="celsius" required><br><br>
		        <button type="submit" name="converter">Converter</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                if(isset($_POST['converter'])){
                    $celsius = $_POST['celsius'];
                    $fahrenheit = ($celsius * 9/5) + 32;
                    echo "<br><h3>Temperatura em Fahrenheit: " . $fahrenheit . "°F </h3>";
                }
			?>
		</div>
	</div>
</body>
</html>