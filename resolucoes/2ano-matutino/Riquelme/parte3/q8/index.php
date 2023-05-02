<?php
    $metodo = $_SERVER["REQUEST_METHOD"];
    $hA = $_POST["hA"] ?? "";
    $hB = $_POST["hB"] ?? "";
    $taxaA = $_POST["taxaA"] ?? "";
    $taxaB = $_POST["taxaB"] ?? "";
    $anos = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 8 Parte 3</title>
</head>

<body>
    <header>
        <h1>População</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Informe os valores necessários</h2> <br>
            <form action="index.php" method="post">
                <label>Quantidade de habitantes da cidade A:
                    <input type="number" name="hA" required>
                </label>
                <label>Taxa de crescimento da cidade A:
                    <input type="number" name="taxaA" step="0.1" required>
                </label>
                <label>Quantidade de habitantes da cidade B:
                    <input type="number" name="hB" required>
                </label>
                <label>Taxa de crescimento da cidade B:
                    <input type="number" name="taxaB" step="0.1" required>
                </label>
                <button>Enviar</button>
            </form>
        </div>

        <div class="box resposta">
            <h2>Resposta</h2> <br>
            <?php
                if ($metodo == "POST") {
                    if($hA > $hB){
                        echo "<h2>A cidade A já tem mais habitantes do que a cidade B</h2>";
                    }else if($taxaA <= $taxaB){
                        echo "<h2>a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento</h2>";
                    }else{
                        while($hA <= $hB){
                            $hA *= 1 + ($taxaA / 100);
                            $hB *= 1 + ($taxaB / 100);
                            $anos++;
                        }
                        echo "<h2>Serão necessários {$anos} anos para que a população da cidade A ultrapasse a da cidade B</h2>";
                        echo "<h2><br>População após esse período:<br>Cidade A: {$hA}<br>Cidade B: {$hB}</h2>";
                    }
                } else {
                    echo "<h2>Aguardando valores</h2>";
                }
            ?>
        </div>
    </div>
</body>

</html>