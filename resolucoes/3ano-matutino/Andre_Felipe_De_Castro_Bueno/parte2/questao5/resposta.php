<?php 
/* 
5- Vamos criar um jogo de par ou ímpar! 
Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". 
Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. 
Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.
Dica: Para gerar um número aleatório em PHP pode ser utilizada a função rand(min,max) em que podem ser passados os número mínimo e o máximo que serão gerados.
*/ 
$num = $_POST["num"] ?? 0;
$num2 = $_POST["num2"] ?? 0;
$escolha = $_POST["esc"] ?? 0;
$num2 = rand(0,10);

if($escolha == 2){
    $soma = $num + $num2;
   if($soma % 2 == 0){ 
    $msg = "O usuário escolheu par e o número {$num}. O computador sorteou o número {$num2}, e a soma deles é {$soma}. {$soma} é par e o usuário venceu.";
   } else {
    $msg = "O usuário escolheu par e o número {$num}. O computador sorteou o número {$num2}, e a soma deles é {$soma}. {$soma} é ímpar e o computador venceu.";
   }
}
if($escolha == 1){
    $soma = $num + $num2;
   if($soma % 2 == 0){ 
    $msg = "O usuário escolheu ímpar e o número {$num}. O computador sorteou o número {$num2}, e a soma deles é {$soma}. {$soma} é par e o computador venceu.";
   } else {
    $msg = "O usuário escolheu ímpar e o número {$num}. O computador sorteou o número {$num2}, e a soma deles é {$soma}. {$soma} é ímpar e o usuário venceu.";
   }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
       <h1><?= $msg ?></h1>
    </div>
</body>
</html>