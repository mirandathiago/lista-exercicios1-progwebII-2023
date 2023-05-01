<?php
    $valor = $_POST["valor"] ?? 1; //ultizei o metodo post pois precisarei receber dados do formulario; o null coalesce serve para retornar os valores caso existam ou sejam nulos.

    $dobro = $valor * 2;   //criei a variavel dobro e valor e ja multipliquei por dois para encontrar o "dobro"
    $metade = $valor / 2; // criei a variavel metade e repeti a valor dividindo por dois para encontrar a metade do numero retornado. 
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
	<h1>Cálculo do dobro e da metade</h1>
</header>    
    <div class="container">
        <div class="box resposta">    
            <h3>O dobro de <?=$valor?> é =<?=$dobro?></h3>  
            <br>
            <h3>A metade de <?=$valor?> é =<?=$metade?></h3>
            <a href="index.php" class="link">Voltar</a>
        </div>    
    </div>      
</body>
</html>