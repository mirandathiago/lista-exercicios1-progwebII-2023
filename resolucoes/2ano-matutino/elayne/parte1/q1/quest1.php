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
        <form action="quest1.php" method="post">
            <div class="box num">
                <label>
                    Preço do produto
                    <br>
                    <input type="number" name="pp">
                </label>
            </div>
        <br>
        <button name="enviar">Enter</button>
        <br>
        </form>
    <?php
    $pp = $_POST["pp"] ?? 0;
   
    $desc = (10*$pp)/100;
    $pf = $pp - $desc; 
    
    ?>

   
    <h2>O preço com o desconto é: <?=$pf?></h2>
</body>

</html>