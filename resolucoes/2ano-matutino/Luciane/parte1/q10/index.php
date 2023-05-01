<?php
/*
10- Um banco está oferecendo um empréstimo com juros compostos de 2,5% ao mês. Crie um formulário que 
receba o valor do empréstimo e o número de meses de pagamento. Em seguida, crie um código PHP que calcule
o valor total a ser pago pelo empréstimo.
Exemplo de entrada: Valor do empréstimo: R$ 5.000,00
Número de meses de pagamento: 12
Exemplo de saída: Valor total a ser pago: R$ 6.559,63
Dica: 
 fórmula de juros compostos pode ser escrita como:
M = C * (1 + i) ^ n
onde:
•	M é o montante acumulado ao final do período de tempo;
•	P é o principal (ou capital) inicial;
•	i é a taxa de juros expressa em decimal (por exemplo, 0,05 em vez de 5%);
•	n é o número de períodos de tempo.

*/
    $c = $_GET["valor"] ?? 0;
    $n = $_GET["meses"] ?? 0;
    $i = 0.025; //valor da taxa de juros
    $m = $c * pow(1 + $i, $n); //calculo do montante de juros compostos


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Juros compostos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Banco PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de juros compostos</h2>
			<form action = "index.php" method = "get">				
				<label>Informe o Valor do Empréstimo:
					<input type="number" name="valor" required value = "<?=$c?>">
				</label>
				<label>Informe o número de meses:
					<input type="number" name="meses" required value = "<?=$n?>">
				</label>		
				<button > Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>	
            <p>O montante ao final de <?= $n?> meses será: R$ <?= number_format($m,2)?></p>
		</div>
	</div>
</body>
</html>
