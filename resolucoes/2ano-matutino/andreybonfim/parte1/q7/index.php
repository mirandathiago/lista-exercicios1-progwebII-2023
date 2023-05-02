<?php
/*
    7- Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. 
    Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
    Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
    Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
*/
    $celsius = $_POST["celsius"] ?? 0;
    $far = ($celsius*9/5)+32 ?? 0;
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <form action="index.php"  method="post">  
        <label> Insira a temperatura em graus Celsius:
            <input type="number" name="celsius">
        </label>
        <br>
        <button>Enviar</button>
        <br>
        <br>
        <?php
        echo "<h2>{$far} graus Fahrenheit</h2>";


        ?>
    </form>
    
</body>
</html>