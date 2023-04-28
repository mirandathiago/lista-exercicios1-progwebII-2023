<?php
    $nome = $_POST["nome"];
    $frutas = $_POST["frutas"];

   // var_dump($frutas);
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
        <h1>Formulário de Frutas</h1>
    </header>
    <div class="container">
        <div class="box resposta">
            <h2>Frutas favoritas <?=$nome?>,<br></h2>
            <p>
                <?php
                    foreach($frutas as $fruta){
                        echo $fruta;
                        echo "<br>";
                    }
                ?>
            </p>
            <a href="index.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>