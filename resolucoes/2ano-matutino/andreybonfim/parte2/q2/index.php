<?php
 /*
      2- Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. 
    Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kWh (quilowatts-hora). 
    Em seguida, crie um código em PHP que calcule o valor da conta de energia com base nas seguintes regras:
    Até 100 kWh, o valor é de R$ 0,50 por kWh.
    De 101 a 200 kWh, o valor é de R$ 0,70 por kWh.
    Acima de 200 kWh, o valor é de R$ 0,87 por kWh.
    Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, o valor a ser cobrado deve ser de R$ 20,00.
 */

    $kwh = $_POST["kwh"] ?? 0;
    $total ?? 0;
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quilowatts-Hora</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label> Insira a quantidade de kWh (quilowatts-hora) consumidas: 
            <input type="number" name="kwh">
        </label>
        <br>
        <button>Enviar</button>
        <br>
        <br>
        <?php
            if($kwh <= 40){ //Até 40kWh, o valor a ser cobrado é de R$20 ou menos, ou seja, indepedentende da quantidade de kWh, ele sendo menor que 40, vai sempre dar menor que R$20.
                echo "<h2>O valor a ser pago é de R$: 20.</h2>";
            }else if($kwh > 40 && $kwh <= 100){
               $total= ($kwh*0.50) + 20;
                echo "<h2>O valor a ser pago é de R$: {$total} pelo total de {$kwh} kWh.</h2>";
            }else if($kwh >= 101 && $kwh <= 200){
                $total= ($kwh*0.70) + 20;
                echo "<h2>O valor a ser pago é de R$: {$total} pelo total de {$kwh} kWh.</h2>";
            }else{
                $total= ($kwh*0.87) + 20;
                echo "<h2>O valor a ser pago é de R$: {$total} pelo total de {$kwh} kWh.</h2>";
            }  
        ?>
    </form>



</body>
</html>