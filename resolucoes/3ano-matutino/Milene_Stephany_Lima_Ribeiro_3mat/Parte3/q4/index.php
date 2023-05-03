<?php
/*
4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N.
Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do
tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15
*/
$n = $_POST["n"] ?? 0;
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
        <h1>Soma dos Números</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            <h2>Informe</h2>
            <form action="index.php" method="post">
                <label>Quantidade de números para serem somados:
                    <input type="number" id="number" name="n" value="<?=$n?>" required>
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
                    for($i = 1; $i <= $n; $i += 1){
                            $soma = $soma + $i;
                        }
                    echo "A soma de todos os impares é {$soma}";
                }else{
                    echo"<p>Aguardando</p>";}
            ?>
        </div>
    </div>
</body>
</html>

