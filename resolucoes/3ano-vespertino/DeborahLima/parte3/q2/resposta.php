<?php
    $n = $_GET["numero"] ?? 3;
    $i = 1;
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Formulário Tabuada</h1>
    </header>
    <div class="container">
        <div class="box resposta">
            <h2>Tabuada do número <?=$n?><hr></h2>
            <?php
                while($i <= 10){
                    $mul = $n * $i;
                    echo "$n * $i = $mul <br>";
                    $i += 1;
                }
            ?>
            <a href="ex1.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>