<!--5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.
Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem ser passados os número mínimo e o máximo que serão gerados. 
.

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
            <h1>Parte 2 (5) Questão 15:</h1>
            <p>Acho que este é o nível ideal para um jogo. Que tal um par ou impar? Aceita? Escolha qual número jogará e qual a sua escolha...Par ou Ímpar?</p>
        </div>

        <form action="resultPage.php" method="get">
            <div id="selecao">
            <select name="numeros" id="numeros">
                <option value="0">Mão vazia! (0)</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10
                </option>
            </select>
            
            <select name="Par/Ímpar" id="parimpar">
                <option value="Par">Par</option>
                <option value="Ímpar">Ímpar</option>
            </select>
            </div>
            <button class="btn-finish">Jogar</button>
        </form>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </main>
</body>

</html>