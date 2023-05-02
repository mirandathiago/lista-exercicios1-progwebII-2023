<?php
    $numeroum = $_POST["numeroum"] ?? 0;
    $numerodois = $_POST["numerodois"] ?? 0;
    $numerotres = $_POST["numerotres"] ?? 0;

    if($numeroum < $numerodois || $numeroum < $numerotres){
        $mensagem = "Menor Número: {$numeroum}";
    }else if($numerodois < $numeroum || $numerodois < $numerotres){
        $mensagem = "Menor Número: {$numerodois}";
    }else if($numerotres < $numeroum || $numerotres < $numerodois){
        $mensagem = "Menor Número: {$numerotres}";
    }else if($numeroum > $numerodois || $numeroum > $numerotres){
        $mensagemu = "Maior Número: {$numeroum}";
    }else if($numerodois > $numeroum || $numerodois > $numerotres){
        $mensagem = "Maior Número: {$numerodois}";
    }else{
        $mensagem = "Maior Número: {$numerotres}";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Formulário de Contato</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Entre em contato</h2>
            <form action="index.php" method="post">
                <label>Número:
                    <input type="number" id="numeroum" name="numeroum" required>
                </label>

                <label>Número:
                    <input type="number" id="numerodois" name="numerodois" required>
                </label>

                <label>Número:
                    <input type="number" id="numerotres" name="numerotres" required>
                </label>

                
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <p><?=$mensagem?></p>
            
            
        </div>
    </div>
</body>
</html>
