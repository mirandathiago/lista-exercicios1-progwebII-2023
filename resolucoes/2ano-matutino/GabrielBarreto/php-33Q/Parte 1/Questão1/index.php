<!--1- Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
Entrada: Preço original: R$ 50,00
Saída: Preço com desconto: R$ 45,00
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
            <h1>Questão 01:</h1>
            <p>Pedro precisa calcular o preço de um produto com um desconto de 10%. Informe o valor do item para calculo:</p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="number" name="valorOriginal"placeholder="Valor do produto" required>
            <button class="btn-finish">Finish </button>
            
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
        
    </main>
</body>

</html>