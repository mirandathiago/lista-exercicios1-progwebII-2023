<!--
    João está planejando uma viagem para o exterior e precisa converter o valor do real para dólar. Crie um formulário que receba o valor em real e a cotação do dólar em reais. Em seguida, crie um código em PHP que calcule o valor em dólar correspondente e exiba na tela.
    Exemplo de entrada: Valor em real: R$100, Cotação do dólar: R$5,30
    Exemplo de saída: Valor em real: $18,86 dólares.
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
                <label>Valor em Real:</label>
                <input type="number" name="real" step="0.01" required><br><br>
                <label>Cotação do Dólar em Reais:</label>
                <input type="number" name="cotacao" step="0.01" required><br><br>
                <button type="submit">Calcular</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $real = $_POST["real"];
                    $cotacao = $_POST["cotacao"];
                    $dolar = number_format($real/$cotacao, 2, '.', '');
                    echo "<br>Valor em dólar: US$".$dolar;
                }
			?>
            
		</div>
	</div>
</body>
</html>