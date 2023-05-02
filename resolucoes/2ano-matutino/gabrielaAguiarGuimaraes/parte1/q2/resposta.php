<!--2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>FORMULÁRIO</title>
</head>

<body>

    <?php
    $n1 = $_POST["num1"] ?? 0; //Declaração da variável número 
   
    $multiplicacao =  $n1 * 2; //Declaração da variável multiplicação e a operação que ela faz 
    $divisao = $n1 / 2; //Declaração da variável divisão e a operação que ela faz 
  
    ?>

    <h2>O DOBRO DESSE NÚMERO É: <?=$multiplicacao?></h2>
    <br>
    <h2>A METADE DESSE NÚMERO É: <?=$divisao?></h2>
  
</body>

</html>