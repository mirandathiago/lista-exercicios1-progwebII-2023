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
<?php
$a =  $_GET['A'] ?? 1;
$b =  $_GET['B'] ?? 4;
$c =  $_GET['C'] ?? 16;
$delta = $b**2 - 4*$a*$c;
$x1 = number_format((-($b) + sqrt($delta))/2*$a,0);
$x2 = number_format((-($b) - sqrt($delta))/2*$a,0);

if($a == ' '||$b == ' '|| $c == ' '){
    $msg = "ERROR: INSIRA VALORES VÁLIDOS (CAMPOS NÃO PREENCHIDOS)";
}else if($delta < 0){
    $msg = "Desculpe, a equação não possui raizes válidas (Considerando Equação E Conjunto dos Reais)";
}else if($delta == 0){
    $msg = "Resultado: X1:{$x1} ,X2:{$x2}. A equação possui apenas uma raiz real (x1 e x2 são iguais)";
}else if($delta >0){
    $msg = "Resultado: X1:{$x1} ,X2:{$x2}. A equação possui duas raizes válidas (x1 e x2 são diferentes!)";
}

if($b >= 0||$c >= 0){
    if($b >= 0){
        $b = "+".$b;
    }
    if($c >= 0){
        $c = "+".$c;
    }
}


?>
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
    <div id="container">
        <h1><?=$a?>x<sup>2</sup><?=$b?>x<?=$c?> = 0</h1>
        <p> <?=$msg?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte2/Questão15/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>