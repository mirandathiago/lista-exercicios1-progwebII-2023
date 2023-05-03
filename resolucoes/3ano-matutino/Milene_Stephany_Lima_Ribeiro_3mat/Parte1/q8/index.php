<?php
/*Maria precisa calcular o valor total que ela irá pagar pela compra de um celular no cartão na loja Magazine PHP.
Para ajudá-la, crie um formulário que receba o valor do celular e em quantas vezes o produto será dividido,
podendo ser de 0 a 12x, sendo que 0 seria a compra à vista.
sabendo que a loja Magazine PHP utiliza juros simples em sua cobrança e cobra 4% de juros a cada mês,
crie um programa em PHP que receba os dados do formulário e calcule o valor total a ser pago por Maria.*/


    $valor = $_POST["valor"] ?? 0;
    $parcela = $_POST["parcela"] ?? 0;
    $juros = (($valor * 4) * $parcela)/100;
    $valorfinal = $juros + $valor;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
    <header>
                              <h1>Calculadora de Juros:</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            <form action="index.php" method="post">
                                 <label>Valor do celular:
                    <input type="number" id="number" name="valor" step="0.01" required value="<?=$valor?>">
                </label>
                               <label>Numeros de parcelas:
                    <input type="number" id="number" name="parcela" min="0" max="12" required  value="<?=$parcela?>">
                </label>
                <button name="enviar"> Enviar </button>
                </div>
        <div class="box resposta">
            <h2>Valor Final:</h2>
            <?php


                $metodo = $_SERVER["REQUEST_METHOD"];
                if($metodo == "POST"){
                    if($parcela == 0){
                        echo "O Celular irá ficar no preço de R$ {$valorfinal}:<br>";
                    }else{
                        $mensal = $valorfinal / $parcela;
                        echo "Será pago o celular em {$parcela} vezes, no valor de R$ {$mensal}. <br> Ficando no preço de : R$ {$valorfinal}<br>";
                    }
       
                }else{
                    echo "<p>Aguardando</p>";
                }
            ?>
            <a href="" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>


