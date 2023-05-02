

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
  <title>conversão de temperatura</title>
</head>
<body>
    <div class= "container">
        <form action="atv9parte2.php" method="POST">
            <label>
                Valor em Real:
                <input type="number" name="real">
                <label>
                cotação do dolar:
                <input type="number" name="dolar" step="0.01">
            </label>
            </label>
            <button>Calcular</button>
        </form>
    <div class="resposta">
        <?php
            $real = $_POST["real"] ?? 0;
            $dolar = $_POST["dolar"]  ?? 0;

            $resul = $real / $dolar;

            echo "valor em  real:{$resul}";
           // echo "valor em dolar:{$dolar}";
        ?>
    </div>
</div>
</body>
</html>