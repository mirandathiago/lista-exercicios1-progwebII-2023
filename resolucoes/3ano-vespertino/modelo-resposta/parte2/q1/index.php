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
        <h1>Maior e menor</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Digite 3 números inteiros diferentes</h2>


            <form action="index.php" method="GET">

                <fieldset>
                    <label>Primeiro número:
                        <input type="number" id="num1" name="num1" required>
                    </label>

                    <label>Segundo número:
                        <input type="number" id="num2" name="num2" required>
                    </label>

                    <label>Terceiro número:
                        <input type="number" id="num3" name="num3" required>
                    </label>

                </fieldset>


                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>

            <?php

            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];

            if ($num1 > $num2 && $num2 > $num3) {
                echo "<p>O maior número é: {$num1} e o menor: {$num3}</p>";

            } elseif ($num3 > $num2 && $num2 > $num1) {
                echo "<p>O maior número é: {$num3} e o menor:{$num1}</p>";

            } elseif ($num2 > $num1 && $num1 > $num3) {
                echo "<p>O maior número é: {$num2} e o menor:{$num3}</p>";

            } elseif ($num2 > $num3 && $num3 > $num1) {
                echo "<p>O maior número é: {$num2} e o menor:{$num1}</p>";

            } elseif($num2 == $num3 && $num3 == $num1) {
                echo "<p>Todos os números são iguais</p>";

            }else{
				echo"<p>Existe número repetido</p>";
			}

            ?>
        </div>
    </div>
</body>

</html>