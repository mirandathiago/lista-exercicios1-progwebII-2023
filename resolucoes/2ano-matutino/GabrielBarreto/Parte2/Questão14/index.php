<!--4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
Exemplo de entrada:
A = 2
B = 5
C = -3
Exemplo de saída:
As raízes da equação de segundo grau são: x1 = 0.5 e x2 = -3.
Lembre-se que a fórmula de Bhaskara é dada por:

Sendo que:

E os parâmetros a serem utilizados na estrutura condicional são:
Se o delta for menor que 0, a equação não possui raízes reais. Deve ser exibida esta mensagem.
Se o delta for igual a 0, a equação possui uma única raiz real. Deve ser exibida a raiz real e a informação que a equação só possui uma raiz.
Se o delta for maior que 0, a equação possui duas raízes reais. Deve ser exibida as duas raízes da equação.
Dica: Para calcular a raiz quadrada utilize a função sqrt(numero) do php.

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
            <h1>Parte 2 (4) Questão 14:</h1>
            <p>Acho que já provei do que sou capaz? não é? Bem, vamos apimentar as coisas! É hora do calculo da equação de <b>segundo grau</b>.<br>Será aplicado o método de <b>Bhaskara</b>, então me informe os valores <b>A</b>, <b>B</b>, <b>C</b> respectivamente.</p>
        </div>

        <form action="resultPage.php" method="get">
            <input id="campoA" type="text" name="A"placeholder="A da equação"required/>
            <input id="campoA" type="text" name="B"placeholder="B da equação"required/>
            <input id="campoA" type="text" name="C"placeholder="C da equação"required/>

            <button class="btn-finish">Finish </button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>