<?php
    $preco = $_POST["preco"];
    $desconto = $preco * 10 / 100;
    $precofinal = $preco - $desconto;



?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Desconto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo1.css" rel="stylesheet">
</head>
<body>
    <div class="container">
     <h1>Calculadora de Desconto</h1>
     <h3>O preço final do produto cujo valor inicial é de R$<?=$preco?> será de R$<?=$precofinal?></h3>
    
        
    </div>
</body>
</html>