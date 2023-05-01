<!--10- Um banco está oferecendo um empréstimo com juros compostos de 2,5% ao mês. Crie um formulário que receba o valor do empréstimo e o número de meses de pagamento. Em seguida, crie um código PHP que calcule o valor total a ser pago pelo empréstimo.
    Exemplo de entrada: Valor do empréstimo: R$ 5.000,00
    Número de meses de pagamento: 12
    Exemplo de saída: Valor total a ser pago: R$ 6.559,63
    Dica: 
    fórmula de juros compostos pode ser escrita como:
    M = P * (1 + i) ^ n
    onde:
    M é o montante acumulado ao final do período de tempo;
    P é o principal (ou capital) inicial;
    i é a taxa de juros expressa em decimal (por exemplo, 0,05 em vez de 5%);
    n é o número de períodos de tempo.
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
                <label for="valor">Valor do empréstimo:</label>
                <input type="number" name="valor" id="valor" required><br><br>
                <label for="meses">Número de meses de pagamento:</label>
                <input type="number" name="meses" id="meses" required><br><br>
                <button type="submit">Calcular</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $valor = $_POST["valor"];
                    $meses = $_POST["meses"];
                    $juros = 0.025;
                    $montante = $valor * pow(1 + $juros, $meses);
                    $total = number_format($montante, 2, ",", ".");
                    echo "<p>Valor total a ser pago: R$ $total</p>";
                }
			?>
            
		</div>
	</div>
</body>
</html>