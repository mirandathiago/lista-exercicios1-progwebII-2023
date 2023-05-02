<?php 
/* 
    10- Um banco está oferecendo um empréstimo com juros compostos de 2,5% ao mês. Crie um formulário que receba o valor do empréstimo e o número de meses de pagamento. Em seguida, crie um código PHP que calcule o valor total a ser pago pelo empréstimo.
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
	<div class="container">
    <form action="resposta.php" method="post">
            <h1></h1>
            <label>
                    Valor do emprestimo:
                    <input type="number" name="empr" value="" min="0" step=0.01>
                    Número de meses:
                    <input type="number" name="meses" value="" min="0" step=0.01>
            </label>
            <button>Calcular</button>
		</div>
</form>
</body>
</html>