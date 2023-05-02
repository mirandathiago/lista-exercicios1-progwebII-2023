<!--2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28

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
            <h1>Parte 3 (2) Questão 22:</h1>
            <p>Hora da tabuada! Informe o número, o resultado será toda a sua tabuada até o limite desejado</p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="number" name="numeroDatabuada"placeholder="Numero:"required/>
            <input id="campoA" type="number" name="numeroLimite"placeholder="Numero Limite:"required/>
            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>