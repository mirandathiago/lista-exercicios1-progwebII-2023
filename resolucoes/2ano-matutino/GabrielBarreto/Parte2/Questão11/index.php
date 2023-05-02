<!--1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
Entrada: 2 5 1
Saída: Menor Número: 1 e o Maior Número: 5
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
            <h1>Parte 2 (1) Questão 11:</h1>
            <p>Bem Você a caba de testar algumas dos códigos em php da parte 1. Agora, que tal aumentar o nível? Indique 3 números e eu lhe direi o maior e o menor:</p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="number" step="0.01" name="numero1"placeholder="Numero 1:"required/>
            <input id="campoA" type="number" step="0.01" name="numero2"placeholder="Numero 2:"required/>
            <input id="campoA" type="number" step="0.01" name="numero3"placeholder="Numero 3:"required/>
            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>