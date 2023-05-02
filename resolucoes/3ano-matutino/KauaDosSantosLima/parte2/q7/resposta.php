<?php
  $idade = $_POST["idade"];
  $peso = $_POST["peso"];
  $altura = $_POST["altura"];
  $genero = $_POST["genero"];

  switch($genero){
    case "M":
        $tmb = 88.36 + (( 13.4 * $peso ) + ( 4.8 * $altura ) - ( 5.7 * $idade ));
        $mensagem = "Sua taxa de metabolismo basal é de aproximadamente $tmb calorias por dia";
        break;
    case "F";
        $tmb = 447.6 + (( 9.2 * $peso ) + ( 3.1 * $altura ) - ( 4.3 * $idade ));
        $mensagem = "Sua taxa de metabolismo basal é de aproximadamente $tmb calorias por dia";
        break;


  }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de TMB </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo17.css" rel="stylesheet">
</head>
<body>
    <div class="container">
     <h1><?= $mensagem ?></h1>
     
    
        
    </div>
</body>
</html>
