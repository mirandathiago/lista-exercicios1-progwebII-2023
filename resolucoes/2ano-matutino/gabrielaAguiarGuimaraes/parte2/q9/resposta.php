<!--9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. Considere as seguintes opções de locais:

Ensolarado: Clube
Ameno: Parque
Chuvoso: Cinema
Nublado: Museu
Tempestuoso: Ficar em casa
O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
Entrada: Ensolarado
Saída: Com o clima ensolarado, recomendamos ir ao Clube.-->

<?php
    $clima =  $_POST["clima"] ?? 0; //Declarei a variável clima que busca o tipo de clima
    $mensagem = "";

//Criei uma case, com cada opção que a pessoa escolheria, e de acordo com o clima que ela escolhesse, cada case tem uma mensagem referente a recomendação daquele clima

    switch($clima){
        case 1: 
          $mensagem = "Com o clima ensolarado, recomendamos ir ao Clube.";
          break;
        case 2:
         $mensagem = "Com o clima ameno, recomendamos ir ao Parque.";
          break;
        case 3:
         $mensagem = "Com o clima chuvoso, recomendamos ir ao Cinema.";
         break;
         case 4:
        $mensagem = "Com o clima nublado, recomendamos ir ao Museu.";
         break;
         case 5:
        $mensagem = "Com o clima tempestuoso, recomendamos ficar em casa.";
          break;
            default: $mensagem = "INVÁLIDO!";
    }
  
?>

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
   
    <?="<h2>{$mensagem}</h2>"?>
    
</body>

</html>
