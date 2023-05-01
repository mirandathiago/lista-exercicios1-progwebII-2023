<?php


$valorcelular = $_POST["valorcelular"] ?? 1000;
$qtdparcelas = $_POST["qtdparcelas"] ?? 0;


// Fórmula: J (juros simples) = C (capital inicial) * i (taxa de juros) * t (tempo de aplicação)
$valorjuros = $valorcelular * 0.04 * $qtdparcelas;
$valortotal = $valorcelular + $valorjuros;


$status = "R$ " . number_format($valortotal, 2, ".", ",");


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
        <h1>Calculadora de Parcelas</h1>
    </header>
    <div class="container">
        <div class="box resposta">
            <h2>Valor Total a Pagar: </h2>


            <p> <?=$status?> </p>
       
            <a href="index.php" class="link">Voltar</a>


        </div>
    </div>
</body>
</html>
