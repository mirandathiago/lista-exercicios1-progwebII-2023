<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>conversor de temperatura</title>
</head>
<body>
    <h1>Conversor de temperatura</h1>
    <div class="container">
        <form action="fisica.php" method="post">
            <label>
                Temperatura em Celsius:
                <input type="number" name="celsius" placeholder="°C" required>
            </label>
            <button>Calcular</button>
        </form>
        <div class="resposta" style="display: block;">
            <h5>Resultado:</h5>
            <?php
                $celsius = $_POST["celsius"] ?? 0;
                $fahrenheit = ($celsius * 9 / 5) + 32;

                echo "Temperatura em celsius:{$celsius}<br>";
                echo "Temperatura em fahrenheit: {$fahrenheit}";
            ?>
        </div>
    </div>
</body>
</html>
