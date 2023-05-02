s<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
  <title>conversão de temperatura</title>
</head>
<body>
    <div class= "container">
        <form action="atv7parte2.php" method="POST">
            <label>
                Temperatura em Celsius:
                <input type="number" name="celsius" placeholder="°C" required>
            </label>
            <button>Calcular</button>
        </form>
    <div class="resposta">
        <?php
            $celsius = $_POST["celsius"] ?? 0;
            $fahrenheit = ($celsius * 9 / 5 ) + 32;

            echo "Temperatura em celsius:{$celsius}°C";
            echo "Tempertura em Fahrenheit:{$fahrenheit}°";
        ?>
    </div>
</div>
</body>
</html>