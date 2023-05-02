<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <meta name="author" content="Lauanda Nobre">
    <title>Controle de cédulas</title>
</head>
<body>
    <h1>Controle de cédulas</h1>
    <div class="container">
        <form action="distribuicao.php" method="post">
            <label>Valor:
                <input type="number" name="valor"  placeholder="Insira O Valor:" min="0" required>
            </label>
            <button>Calcular</button>
        </form>
        <div class="resposta">
            <?php
            $valor = $_POST["valor"] ?? 0;
            $guardar = $valor;
            #iniciar os valores em zero
            $contador100 = 0;
            $contador50 = 0;
            $contador20 = 0;
            $contador10 = 0;
            $contador5 = 0;
            $contador2 = 0;
            $contador1 = 0;

            while ($valor >= 100) {
                #repeticao
                $valor = $valor - 100;
                $contador100++;
            }
            while ($valor >= 50 && $valor < 100) {
                #repeticao
                $valor = $valor - 50;
                $contador50++;
            }
            while ($valor >= 20 && $valor < 50) {
                #repeticao
                $valor = $valor - 20;
                $contador20++;
            }
            while ($valor >= 10 && $valor < 20) {
                #repeticao
                $valor = $valor - 10;
                $contador10++;
            }
            while ($valor >= 5 && $valor < 10) {
                #repeticao
                $valor = $valor - 5;
                $contador5++;
            }
            while ($valor >= 2 && $valor < 5) {
                #repeticao
                $valor = $valor - 2;
                $contador2++;
            }
            while ($valor >= 1 && $valor < 2) {
                #repeticao
                $valor = $valor - 1;
                $contador1++;
            }
            #mostrar valores
            echo "Valor informado: R$ {$guardar}<br><br>";
            echo "{$contador100} nota(s) de R$ 100<br>";
            echo "{$contador50} nota(s) de R$ 50<br>";
            echo "{$contador20} nota(s) de R$ 20<br>";
            echo "{$contador10} nota(s) de R$ 10<br>";
            echo "{$contador5} nota(s) de R$ 5<br>";
            echo "{$contador2} nota(s) de R$ 2<br>";
            echo "{$contador1} nota(s) de R$ 1<br>";
            
            ?>
        </div>
    </div>
</body>
</html>