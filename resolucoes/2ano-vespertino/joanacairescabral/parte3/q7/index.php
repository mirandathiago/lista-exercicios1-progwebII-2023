<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <header>
        <h1>Notas de Dinheiro do Caixa Eletrônico</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Informe</h2>
            <form action="index.php" method="post">
                <label>Valor:
					<input type="number" id="valor" name="valor" required>
				</label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
                $valor=$_POST["valor"] ?? 0;
                $n100 = 0;
                $n50 = 0;
                $n20 = 0;
                $n10 = 0;
                $n5 = 0;
                $n2 = 0;
                $n1 = 0; //iniciei todas as variaveis de cédulas
                $total=$valor; //inicializei o total
                while ($total > 0) {
                    if ($total >= 100) {
                        $total -= 100;
                        $n100++;
                    } elseif ($total >= 50) {
                        $total -= 50;
                        $n50++;
                    } elseif ($total >= 20) {
                        $total -= 20;
                        $n20++;
                    } elseif ($total >= 10) {
                        $total -= 10;
                        $n10++;
                    } elseif ($total >= 5) {
                        $total -= 5;
                        $n5++;
                    } elseif ($total >= 2) {
                        $total -= 2;
                        $n2++;
                    } elseif ($total >= 1) {
                        $total -= 1;
                        $n1++;
                    }
                }
                echo "<p>Valor informado: R$ $valor</p><br>";
                echo "<p>$n100 nota(s) de R$100</p><br>";
                echo "<p>$n50 nota(s) de R$50</p><br>";
                echo "<p>$n20 nota(s) de R$20</p><br>";
                echo "<p>$n10 nota(s) de R$10</p><br>";
                echo "<p>$n5 nota(s) de R$5</p><br>";
                echo "<p>$n2 nota(s) de R$2</p><br>";
                echo "<p>$n1 nota(s) de R$1</p>";

            ?>
        </div>
    </div>
</body>

</html>