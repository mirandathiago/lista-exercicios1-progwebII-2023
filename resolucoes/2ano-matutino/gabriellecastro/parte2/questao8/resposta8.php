<?php

  $peso= $_POST["peso"] ?? 0;
  $altura = $_POST["altura"] ?? 0;
  $mensagem = "";

  $imc = $peso / ($altura * $altura);
    if($imc < 18.5){
        $mensagem = "abaixo do peso";
    }elseif($imc >= 18.5 && $imc <= 24.9){
        $mensagem = "peso normal";
}elseif($imc >= 25 && $imc <= 29.9){
        $mensagem = "sobrepeso";
    }elseif($imc >= 30 && $imc<= 34.9){
        $mensagem = "obesidade grau 1";
    }elseif($imc >= 35 && $imc<= 39.9){
        $mensagem = "obesidade grau 2";
}else{
        $mensagem = "obesidade grau 3";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>IMC</title>
</head>

<body>
   
    <h2>A classsificaçao do IMC é: <?=$imc?> , você está <?=$mensagem?></h2>
    
</body>

</html>