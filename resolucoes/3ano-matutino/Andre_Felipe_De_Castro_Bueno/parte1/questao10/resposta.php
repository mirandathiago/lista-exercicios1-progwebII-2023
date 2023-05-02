<?php 
  /*
    10- Um banco está oferecendo um empréstimo com juros compostos de 2,5% ao mês. 
    Crie um formulário que receba o valor do empréstimo e o número de meses de pagamento. 
    Em seguida, crie um código PHP que calcule o valor total a ser pago pelo empréstimo.
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
   $emprestimo = $_POST["empr"] ?? 0;
   $meses = $_POST["meses"] ?? 0;
   $juros = 0.025;

   $montante = $emprestimo * pow((1 + $juros), $meses);
   $valorT = round($montante, 2);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <h1>O Valor total a pagar é: R$<?=number_format($valorT, 2)?></h1>
    </div>
</body>
</html>