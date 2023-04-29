<?php
    $preco = $_POST["preco"] ?? 1;

    $desconto = $preco * 0.9;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
	<h1>Calculo do Preço de um Produto</h1>
</header>	    
    <div class="container">
        <div class="box resposta">
            <h2>O preço do produto após o desconto é de R$ <?=$desconto?></h2>
            <br>
            <a href="index.php" class="link">Voltar</a>
        </div>
    </div>        
</body>
</html>