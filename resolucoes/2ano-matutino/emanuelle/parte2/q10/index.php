<!--10-João trabalha em uma empresa que funciona de segunda a sexta-feira, 
mas ele tem um compromisso importante no trabalho que precisa ser realizado em um dia específico da semana.
Para ajudá-lo, você deve desenvolver um programa que permita que ele informe o dia da semana em que esse compromisso 
será realizado e o programa deve informar se é um dia útil, final de semana ou se o dia informado é inválido.
Para isso, crie um formulário com um campo select que permita a escolha do dia da semana (de 1 a 7), e utilize 
o comando switch para verificar em qual dia da semana foi selecionado e, em seguida,
informar se o dia é útil (segunda a sexta-feira), final de semana (sábado e domingo) ou
inválido (número menor que 1 ou maior que 7). Considere que Domingo é o dia 1 e Sábado o dia 7.
Exemplo de entrada: Selecionado no campo select o valor 3 (que representa a quarta-feira)
Exemplo de saída: A quarta-feira é um dia útil.-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <form action="resposta.php" method="post">


        <h1></h1>
    <label>Qual o dia da semana?
    <select name="dia"> 

       <option  value = ""></option>
       <option  value = "1">1</option>
       <option  value = "2">2</option>
       <option  value = "3">3</option>
       <option  value = "4">4</option>
       <option  value = "5">5</option>
       <option  value = "6">6</option>
       <option  value = "7">7</option>
      

    </select>
        
</label>
        <button>CALCULAR</button>
    </form>


</body>

</html>