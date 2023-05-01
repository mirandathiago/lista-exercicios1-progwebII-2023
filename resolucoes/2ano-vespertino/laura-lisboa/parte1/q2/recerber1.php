<?php
    $valor = $_POST["valor"] ?? 1;

    $dobro = $valor * 2;
    $metade = $valor / 2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculo</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
	<h1>Calcúlo do dobro e da metade</h1>
</header>    
    <div class="container">
        <div class="box resposta">    
            <h3>O dobro de <?=$valor?> é <?=$dobro?></h3>
            <br>
            <h3>A metade de <?=$valor?> é <?=$metade?></h3>
            <a href="index.php" class="link">Voltar</a>
        </div>    
    </div>      
</body>
</html>