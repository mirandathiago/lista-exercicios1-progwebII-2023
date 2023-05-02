<!--2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2-->
<?php
    $valor =  $_GET['value'] ?? 5;
    $calculo = [$valor*2,$valor/2];
    if($valor <= 0){
        $mensagemDeErro = 'Insira Valores Acima de 0! [ERROR-005]'; 
    }else if($valor >0){
        $mensagemDeErro = 'Calculado Com sucesso!'; 
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
        <h1>Original:<?= $valor ?></h1>
        
            Valor Duplicado: <?=$calculo[0]?><br>
            Sua Metade: <?= $calculo[1]?></p>
        <a href="index.php"><button class="back">Back</button></a>
        <a href="../Questão3/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
    </div>
</body>
</html>
