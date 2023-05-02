<?php
/*
2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação
utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
*/
    $m= $_POST["m"] ?? "";
    $q = $_POST["q"] ?? "";
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
        <h1>Tabuada</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            <h2>Informe </h2>
            <form action="index.php" method="post">
               
                <label>Multiplicador:
                    <input type="number" id="number" name="m" min="0" value="<?=$m?>" required>
                </label>
                <label>Ultimo numero da tabuada:
                    <input type="number" id="number" name="q" min="0" value="<?=$q?>"  required>
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resultado</h2>
            <?php
                $metodo = $_SERVER["REQUEST_METHOD"];
                if($metodo == "POST"){
                    $tabuada = 1;
                    while($tabuada <= $q){
                        $produto = $tabuada * $m;
                        echo"$m x $tabuada = $produto <br>";
                        $tabuada++;
                    }
                }else{
                    echo"<p>Aguardando</p>";}
            ?>
        </div>
    </div>
</body>
</html>

