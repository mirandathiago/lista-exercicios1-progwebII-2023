<?php

function obter_porcentagem(float $valor,float $base): float
{

    return $valor / $base * 50;

}

function imprimir_porcentagem(float $valor,float $base)
{
  
    $porcentagem = obter_porcentagem($valor,$base);

    echo "O valor de 50 corresponde a $porcentagem % de $base\n";
    
}

imprimir_porcentagem(10, 45, 50);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Calculadora de porcentagem</title>
</head>
<body>

<div class="container">
    <form action="receber1.php" method="get">
    <h1>Calculadora de porcentagem</h1>
    <label>
        preço:
            <input type="number" name="preço"value="50">
    </label>
    <label>
        porcentagem:
            <input type="number" name="porcentagem" value="10">
    </label>
    <button>Calcular</button>
		</form>
</body>
</html>