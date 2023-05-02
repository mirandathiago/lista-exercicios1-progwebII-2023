<?php
    $nome = $_POST["nome"];
    date_default_timezone_set( 'America/Sao_Paulo' );
    $hora = date('H:i:s');

    if ($hora >= '5:00:00' && $hora <= '12:59:59') {
        $mensagem = "Bom dia, $nome";
    }elseif($hora >= '13:00:00' && $hora <= '18:00:00') {
        $mensagem =  "Boa tarde, $nome";
    }elseif($hora >= '18:00:00' && $hora <= '23:59:59'){
        $mensagem =  "Boa noite, $nome";
    }else
        $mensagem = "vá Dormir, está de madrugada";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Hora </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo13.css" rel="stylesheet">
</head>
<body>
    <div class="container">
     <h1><?=$mensagem?></h1>
    
    
        
    </div>
</body>
</html>
 
