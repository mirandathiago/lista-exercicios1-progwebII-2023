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

<?php
    $dia =  $_POST["dia"] ?? 0;;
   $mensagem = "";

//Crie um case, com cada opção que o João escolheria, e de acordo com o dia da semana que ele escolhesse, cada case tem uma mensagem referente ao dia
    switch($dia){
        case 1: 
          $mensagem = "Domingo é final de semana!";
          break;
        case 2:
         $mensagem = "Segunda é dia útil!";
          break;
        case 3:
         $mensagem = "Terça é dia útil!";
         break;
         case 4:
        $mensagem = "Quarta é dia útil!";
         break;
         case 5:
        $mensagem = "Quinta é dia útil!";
          break;
         case 6:
        $mensagem = "Sexta é dia útil!";
          break;
          case 7:
      $mensagem = "Sábado é dia da semana!";
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
