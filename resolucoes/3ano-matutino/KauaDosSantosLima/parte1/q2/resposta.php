<?php
    $numero = $_POST["numero"];
    $dobro = $numero * 2;
    $metade = $numero / 2;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Dobro e Metade </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo2.css" rel="stylesheet">
</head>
<body>
    <div class="container">
     <h1>Calculadora de Dobro e Metade</h1>
     <h3>O dobro de <?=$numero?> é igual a <?=$dobro?> já sua metade é igual a <?=$metade?> </h3>
    
        
    </div>
</body>
</html>
