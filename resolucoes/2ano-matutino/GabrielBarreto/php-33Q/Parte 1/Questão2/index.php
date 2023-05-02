<!--2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2-->

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
            <h1>Questão 02:</h1>
            <p>Insira um valor para ser indicado seu dobro e a sua metade. Informe o valor  para calculo:</p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="number" name="value" step="0.1"placeholder="Valor para Calculo" required>
            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>