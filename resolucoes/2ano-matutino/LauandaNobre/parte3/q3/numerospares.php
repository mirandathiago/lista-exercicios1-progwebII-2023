<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <meta name="author" content="Lauanda Nobre">
    <title>Números pares</title>
</head>
<body>
    <h1>Números pares</h1>
    <div class="container">
        <form action="numerospares.php" method="post">
            <label>Informe o primeiro intervalo:
                <input type="number" name="num1" placeholder="0" min="0"  style="width: 75px;" required>
            </label>
            <label>Informe o segundo intervalo:
                <input type="number" name="num2" placeholder="0" min="0"  style="width: 75px;" required>
            </label>
            <button>Enviar</button>
        </form>
        <div class="resposta">
            <?php
            $num1 = $_POST["num1"] ?? 0;
            $num2 = $_POST["num2"] ?? 0;
            $quant = 0;

            for($i = $num1; $i <= $num2; $i++){
                if($i % 2 == 0){
                    $quant++;
                }
            }
            echo "Quantidade de números pares: {$quant}<br>";
            
            ?>
        </div>
    </div>
</body>
</html>