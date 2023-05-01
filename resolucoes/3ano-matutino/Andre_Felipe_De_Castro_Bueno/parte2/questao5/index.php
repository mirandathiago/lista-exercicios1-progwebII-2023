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

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
        <form action="resposta.php" method="post">
            <h1></h1>
            <label>
                Insira um número de 0 a 10 e clique em jogar:
                <input type="number" name="num" value="0" min="0" max="10">
                Preencha 1 para Ìmpar ou 2 para par:
                <input type="number" name="esc" value="0" min="1" max="2">
            </label>
            <button>Jogar</button>
		</form>
        
	</div>
</body>
</html>