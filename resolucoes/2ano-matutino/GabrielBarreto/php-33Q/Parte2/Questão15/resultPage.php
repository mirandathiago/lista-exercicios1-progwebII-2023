<!--5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.
Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem ser passados os número mínimo e o máximo que serão gerados. 

-->
<?php
$numeroUsuario =  $_GET['numeros'] ?? 1;
$opcao_par_impar =  $_GET['Par/Ímpar'] ?? 50;
$randomNumber = rand(0,10);
$resultado = ($randomNumber + $numeroUsuario); 
if($resultado % 2 == 0){
    $resultadoDaDivisão_2 = 'Par';
}else{
    $resultadoDaDivisão_2 = 'Ímpar';
}
if($opcao_par_impar == $resultadoDaDivisão_2){
    $msg = "Parabéns Você venceu ";
}else{
    $msg = "Que pena mona....Você perdeu..Por tanto <b>Eu Venci!!!</b>";
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
        <h1><?=$resultadoDaDivisão_2 ?>!</h1>
        <p>Você escolheu <b><?=$opcao_par_impar?></b>, Eu joguei <b><?=$randomNumber?></b> e você jogou <b><?=$numeroUsuario ?></b>.<?=$msg?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../../Parte2/Questão16/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>

</html>