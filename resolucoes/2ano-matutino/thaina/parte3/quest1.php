<?php

    $n1 = $_POST["n1"] ?? 0;
    $fat = $n1*($n1-1);
    $num2=$n1;

    if($fat==0){
        $fat=1;
    }else {
        for($i=2; $i<$n1; $i++){
            $fat=$fat*($n1-$i);
        }  
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Fatorial</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <form action="quest1.php" method="post">

        <label>
          Entre com um número
            <input type="number" name="n1">
        </label>
        <button>ENTER</button>
    </form>

    <p>O fatorial de <?=$num2?> é <?=$fat?></p>
</body>

</html>