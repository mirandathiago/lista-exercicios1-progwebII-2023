<!--4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N. Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5

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
            <h1>Parte 3 (4) Questão 24:</h1>
            <p>Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N.Vamos ajudá-lo. Me informe o número e eu farei o cálculo </p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="number" name="numero" placeholder="Numero:"required />
            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>