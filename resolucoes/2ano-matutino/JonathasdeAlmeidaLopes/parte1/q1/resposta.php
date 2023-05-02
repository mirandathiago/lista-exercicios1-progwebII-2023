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
    <title>CALCULAR</title>
</head>

<body>

    <?php
    $n1 = $_POST["num1"] ?? 0; 
    //O método GET envia as informações codificadas do usuário anexadas à solicitação de página.
    //O método POST transfere informações por meio de cabeçalhos HTTP.
   
   
    $multiplicacao =  $n1 * 2; //dobro do numero do usuario
    $divisao = $n1 / 2; // metade do numero do usuario
    $resto = $n1 % 2; //resto caso tiver 
    ?>

   
    <h2>O resultado da multiplicação é: <?=$multiplicacao?></h2>
    <h2>O resultado da divisão é: <?=$divisao?></h2>
    <h2>O resto da divisão é: <?=$resto?></h2>
</body>

</html>