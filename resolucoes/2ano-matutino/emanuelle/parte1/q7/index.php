<!--
Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
Exemplo:
Entrada:Temperatura em Celsius: 25
Saída:Temperatura em Fahrenheit: 77°F
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <form action="resposta.php" method="post">
        <br>
        <br>

        <h1> Transfomando Celsius em Fahrenheit</h1>

        <label>
       Temperatura em Celsius:
            <input type="number" name="celsius">
        </label>
        <br>
        
        <button>CALCULAR</button>
    </form>


</body>

</html>