<?php
    $preco = $_POST["preco"] ?? 1;

    $dobro = $preco * 2;
    $metade = $preco / 2;
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
            <h3>O dobro de <?=$preco?> é <?=$dobro?></h3>
            <br>
            <h3>A metade de <?=$preco?> é <?=$metade?></h3>
            <a href="index.php" class="link">Voltar</a>
        </div>    
    </div>      
</body>
</html>