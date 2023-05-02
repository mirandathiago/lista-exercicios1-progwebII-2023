<!--3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6

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
            <h1>Parte 2 (3) Questão 23:</h1>
            <p>Informe um Intervalo de numeros naturais e eu lhe direi quantos valores existem neste intervalo:</p>
        </div>
        <form action="resultPage.php" method="get">
            <input id="campoA" type="text" name="intervaloA"placeholder="Ponto 1:"/>
            <input id="campoA" type="text" name="intervaloB"placeholder="Ponto 2:"/>
            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>