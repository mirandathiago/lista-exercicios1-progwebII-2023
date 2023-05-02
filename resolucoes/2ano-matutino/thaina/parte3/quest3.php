
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IMC</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>

    <h1> Entre com os números para se tornarem um intervalo  </h1>
    <form action="quest3.php" method="post">

        <label>
          Número 1:
            <input type="number" name="num1">
        </label>
        <br>
        <label>
            Número 2:
            <input type="number" name="num2" >
        </label>
        
        <button>ENTER</button>
    </form>
    <?php
    $num1 = $_POST["num1"] ?? 0;
    $num2 = $_POST["num2"] ?? 0;
    $quant = 0;

    for($i = $num1; $i <= $num2; $i++){
        if($i %2 == 0){
        $quant++;
        }
    }


?>

    <h4>A quantidade de números pares é: <?=$quant?> </h4>

</body>

</html>