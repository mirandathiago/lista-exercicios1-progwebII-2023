<?php
/*
3- João deseja saber quantos números pares existem em um intervalo. 
Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e,
utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6
*/
$inicial = $_POST["inicial"] ?? 0;
$final = $_POST["final"] ?? 0;
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
        <h1>Números Pares</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            <h2>Informe</h2>
            <form action="index.php" method="post">
                <label>Número inicial:
                    <input type="number" id="number" name="inicial" value="<?=$inicial?>" required>
                </label>
                <label>Número final:
                    <input type="number" id="number" name="final" value="<?=$final?>" required>
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resultado</h2>
            <?php
                $metodo = $_SERVER["REQUEST_METHOD"];
                if($metodo == "POST"){
                        $soma = 0;
                        for($i = $inicial; $i <= $final; $i ++){
                           
                            if($i % 2 == 0){
                                $soma++;    
                            }
                        }
                        echo "A quantidade de números pares é {$soma}";
                    }else{
                    echo"<p>Aguardando Operação</p>";}
            ?>
        </div>
    </div>
</body>
</html>

