<?php
    $metodo = $_SERVER["REQUEST_METHOD"];
    $valorInicial = $_POST["valor"] ?? "";
    $valor = $valorInicial;
    $cem = 0;
    $cinq = 0;
    $vint = 0;
    $dez = 0;
    $cinc = 0;
    $dois = 0;
    $um = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 7 Parte 3</title>
</head>

<body>
    <header>
        <h1>Cédulas</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Informe o valor inteiro</h2> <br>
            <form action="index.php" method="post">
                <label>Valor:
                    <input type="number" name="valor" required value="<?=$valorInicial?>">
                </label>
                <button>Enviar</button>
            </form>
        </div>

        <div class="box resposta">
            <h2>Resposta</h2> <br>
            <?php
            if ($metodo == "POST") {
                while ($valor > 0) {
                    if ($valor >= 100) {
                        $valor -= 100;
                        $cem++;
                    } else if ($valor >= 50) {
                        $valor -= 50;
                        $cinq++;
                    } else if ($valor >= 20) {
                        $valor -= 20;
                        $vint++;
                    } else if ($valor >= 10) {
                        $valor -= 10;
                        $dez++;
                    } else if ($valor >= 5) {
                        $valor -= 5;
                        $cinc++;
                    } else if ($valor >= 2) {
                        $valor -= 2;
                        $dois++;
                    } else if ($valor >= 1) {
                        $valor -= 1;
                        $um++;
                    }
                }
                echo "<h2>Valor lido: {$valorInicial}</h2>";
                echo "<h2>{$cem} nota(s) de R$100<br>{$cinq} nota(s) de R$50<br>{$vint} nota(s) de R$20<br>{$dez} nota(s) de R$10<br>{$cinc} nota(s) de R$5<br>{$dois} nota(s) de R$2<br>{$um} nota(s) de R$1</h2>";
            } else {
                echo "<h2>Aguardando valores</h2>";
            }
            ?>
        </div>
    </div>
</body>

</html>