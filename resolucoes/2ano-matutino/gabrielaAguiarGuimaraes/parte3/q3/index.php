<!--3- João deseja saber quantos números pares existem em um intervalo. 
Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e,
utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:Quantidade de números pares: 6-->

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
        
<h1>INTERVALOS ENTRE OS NÚMEROS</h1>
        <label>
          Número 1:
            <input type="number" name="num1">
        </label>
        <br>
        <label>
            Número 2:
            <input type="number" name="num2" >
        </label>
        
        <button>CALCULAR</button>
    </form>


</body>

</html>