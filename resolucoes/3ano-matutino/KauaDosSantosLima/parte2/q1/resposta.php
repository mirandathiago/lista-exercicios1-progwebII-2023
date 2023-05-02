<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

      if ($numero1 > $numero2 && $numero1 > $numero3) {
        $maior = $numero1;
    } elseif ($numero2 > $numero3) {
        $maior = $numero2;
    } else {
        $maior = $numero3;
    }

    if ($numero1 < $numero2 && $numero1 < $numero3) {
        $menor = $numero1;
    } elseif ($numero2 < $numero3) {
        $menor = $numero2;
    } else {
        $menor = $numero3;
    }
  ?>  

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Números</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo11.css" rel="stylesheet">
</head>
<body>
    <div class="container">
     
     <h1>Resultados</h1>
    <h3>O maior número foi <?=$maior?> já o menor foi <?=$menor?></h3>
        
    </div>
</body>
</html>