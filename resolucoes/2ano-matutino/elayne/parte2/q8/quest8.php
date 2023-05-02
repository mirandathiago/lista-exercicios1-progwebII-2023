<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Calculadora de IMC</title>
</head>

<body>
        <form action="quest8.php" method="post">

        <label>
        Peso
        <br>
            <input type="number" name="peso">
        </label>
        <br>
        <label>
        Altura
        <br>
            <input type="number" name="altura" step="0.01">
        </label>
        <br>
        <button>Enter</button>
        </form>
        <?php

            $peso = $_POST["peso"] ?? 1;
            $altura = $_POST["altura"] ?? 1;
            $men = "";

            $imc = $peso / ($altura * $altura);

            if($imc < 18.5){
                $men = "abaixo do peso";
            }elseif($imc >= 18.5 && $imc <= 24.9){
                $men = "com o peso normal";
            }elseif($imc >= 25 && $imc <= 29.9){
                $men = "sobrepeso";
            }elseif($imc >= 30 && $imc<= 34.9){
                $men = "com obesidade grau 1";
            }elseif($imc >= 35 && $imc<= 39.9){
                $men = "com obesidade grau 2";
            }else{
                $men = "com obesidade grau 3";
            }
        
        ?>
    <br>
    <hr>
    <br>
    <h2>A classsificaçao do IMC é: <?=$imc?> , você está <?=$men?></h2>
    
</body>

</html>