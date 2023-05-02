<?php
$taxaDeJuros = 0.025; # <-  O mesmo que 2,5%

#capturar os valores dos inputs
$capital = $_POST['valordoemprestimo'] ?? 0;
$totalMeses = $_POST['totaldemeses'] ?? 0;

$montante = $capital * ((1 + $taxaDeJuros) ** $totalMeses);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Lauanda Nobre">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Juros Compostos</title>
</head>
<body>
    <h1>Juros Compostos</h1>
    <div class="container">
    <form action="jurosCompostos.php" method="post">
        <label>
            Valor do empréstimo:
            <input type="number" name="valordoemprestimo" required min="1">
        </label>
        <label>
            Total de meses:
            <input type="number" name="totaldemeses" required min="0">
        </label>
        <button>Calcular</button>
    </form>
    <div class="resposta">
        <h5 style="display: block;">Resultado:</h5>
        <?php
            # verificar os campos de entrada
            if($_SERVER["REQUEST_METHOD"] == "POST") {
              echo $montante;
            }
        ?>
    </div>
    </div>
</body>
</html>