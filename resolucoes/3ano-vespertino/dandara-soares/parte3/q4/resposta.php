<?php
    $N = $_POST["N"];
    $resul = 0;
    for($i = 1; $i <= $N; $i++){
        $resul += $i;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="box resposta">
            <h2>Somar os números de 1 a N</h2>
            <?php echo "<p> A soma dos números de 1 até {$N} é {$resul} </p>"?>
            <br>
            <a href="index.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>