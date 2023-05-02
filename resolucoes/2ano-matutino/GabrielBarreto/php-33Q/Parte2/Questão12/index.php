<!--Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kWh.
De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
Exemplo de entrada: Consumo de energia: 250 kWh
Exemplo de saída: Valor da conta de energia: R$ 237,50


-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com um desconto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div id="container">
            <h1>Parte 2 (2) Questão 12:</h1>
            <p>Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. Calcularei o valor da conta de energia com base nas seguintes regras:<br><br>
                -Até 100 kWh, o valor é de R$ 0,50 por kWh.<br>
                -De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.<br>
                -Acima de 200 kWh, o valor é de R$ 0,87 por kWh.<br>
                -Além disso, a conta de energia possui uma taxa mínima de R$ 20,00.<br></br> Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00. Informe o consumo de energia em Kwh</p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="number" name="consumokwh" placeholder="Consumo de Energia em kWh (quilowatts-hora)"required/>
            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>