<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Calculando</title>
</head>

<body>
        <form action="quest2.php" method="post">
            <div class="box num">
                <label>
                    Número
                    <br>
                    <input type="number" name="n1">
                </label>
            </div>
        <br>
        <button name="enviar">Enter</button>
        <br>
        </form>
    <?php
    $n1 = $_POST["n1"] ?? 0;
   
    $dobro =  $n1 * 2;
    $metade = $n1 / 2;
    ?>

   
    <h2>O dobro é: <?=$dobro?></h2>
    <h2>A metade é: <?=$metade?></h2>
</body>

</html>