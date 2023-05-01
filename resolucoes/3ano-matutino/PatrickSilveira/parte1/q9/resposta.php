<?php
    /*
    9- João está planejando uma viagem para o exterior e precisa converter o valor do real para dólar. 
    Crie um formulário que receba o valor em real e a cotação do dólar em reais.
    Em seguida, crie um código em PHP que calcule o valor em dólar correspondente e exiba na tela.
        Exemplo de entrada: Valor em real: R$100, Cotação do dólar: R$5,30
        Exemplo de saída: Valor em real: $18,86 dólares.

    */

    $real = $_POST["real"] ?? 1;
    $cotacao = $_POST["cotacao"] ?? 5;
    $conversao = $real / $cotacao;

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
		<h1>Conversor de Cotação do Dólar</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A quantia de R$<?="{$real}"?> reais equivale a $<?="{$conversao}"?> dólares</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>