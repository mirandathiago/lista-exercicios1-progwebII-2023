<?php
    /*
    Questão Número 2 da lista, Parte 2.

    Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
    */

    $metodo = $_SERVER["REQUEST_METHOD"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobro e Metade</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main>
        <div id="container">
            <h1>Questão 02:</h1>
            <p>Escreva um número para que possam ser exibidos seu dobro e sua metade</p>
        </div>

        <form action="index.php" method="post">
            <input  type="number" name="numero"placeholder="Insira o número" step="0.01"/>
            <button>Finish</button>
        </form>

        <div class="box">
            <?php

            if ($metodo == "POST"){
                $numero = $_POST["numero"] ?? 0;
                $metade = $numero / 2;
                $dobro = $numero * 2;
                echo "<h1>Resposta</h1>";
                echo "<p>O número digitado foi {$numero} seu dobro é {$dobro} e sua metade é {$metade}</p>";
            }
            ?>
        </div>
        
    </main>
</body>

</html>