<?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $mensagem = "Você está abaixo do peso";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        $mensagem =  "Você está com o peso normal";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        $mensagem =  "Você está com sobrepeso";
    } elseif ($imc >= 30 && $imc <= 34.9) {
        $mensagem =  "Você está com obesidade grau 1";
    } elseif ($imc >= 35 && $imc <= 39.9) {
        $mensagem =  "Você está com obesidade grau 2";
    } else {
        $mensagem =  "Você está com obesidade grau 3";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulário de IMC </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo18.css" rel="stylesheet">
</head>
<body>
    <div class="container">
     <h1>Resultado do seu IMC <?=$imc?></h1>
     <h3><?=$mensagem?></h3>
    
        
    </div>
</body>
</html>