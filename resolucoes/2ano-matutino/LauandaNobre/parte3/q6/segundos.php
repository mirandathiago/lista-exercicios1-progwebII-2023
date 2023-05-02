<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <meta name="author" content="Lauanda Nobre">
    <title>Conversor de Segundos</title>
</head>
<body>
    <h1>Conversor de Segundos</h1>
    <div class="container">
        <form action="segundos.php" method="post">
            <label>Insira o total de segundos:
                <input type="number" name="segundos" min="1" required>
            </label>
            <button>
                Calcular
            </button>
        </form>
        <div class="resposta">
            <?php
            $tempo = $_POST["segundos"] ?? 0;
            echo "<h3>Entrada: {$tempo} segundos<br>";
            $totalhoras = 0;
            $totalminutos = 0;
            $totalsegundos = 0;

            while($tempo >= 3600){
                $tempo = $tempo - 3600;//hora
                $totalhoras++;
            }
            while ($tempo >= 60 && $tempo < 3600) {
                $tempo = $tempo - 60;//minuto
                $totalminutos++;
            }
            $totalsegundos = $tempo;//tempo que sobrou

            echo "<br>Horas formatadas: <br>{$totalhoras}:{$totalminutos}:{$totalsegundos}<br></h3>";//mostrar

            ?>
        </div>
    </div>
    <style>
        h3{
            background-color: #c7bcab;
            text-align: center;
            width: 250px;
            height: 250px;
            padding: 10px;
            border-radius: 8px;
        }
        .resposta{
            border: none;
        }
    </style>
</body>
</html>