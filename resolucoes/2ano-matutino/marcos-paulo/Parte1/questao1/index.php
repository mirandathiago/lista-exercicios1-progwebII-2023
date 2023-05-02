<?php
    /*
    Questão Número 1 da lista, Parte 1.
    
    Pedro precisa calcular o preço de um produto com um desconto de 10%. 
    Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
    Entrada: Preço original: R$ 50,00
    Saída: Preço com desconto: R$ 45,00
*/
    $metodo = $_SERVER["REQUEST_METHOD"];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com um desconto</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main>
        <div id="container">
            <h1>Questão 01:</h1>
            <p>Pedro precisa calcular o preço de um produto com um desconto de 10%. Informe o valor do item para calculo:</p>
        </div>

        <form action="index.php" method="post">
            <input  type="number" name="valorOriginal"placeholder="Valor do produto" step="0.01"/>
            <button>Finish</button>
        </form>

        <div class="box">
            <?php


            if ($metodo == "POST"){
                $valorOriginal = $_POST["valorOriginal"] ?: 0;
                $valorFinal = $valorOriginal * 0.90;
                echo "<h1>Resposta</h1>";
                echo "<p>O valor a ser pago com o desconto de 10% é de R$$valorFinal </p>";
            }
            ?>
        </div>
        
    </main>
</body>

</html>