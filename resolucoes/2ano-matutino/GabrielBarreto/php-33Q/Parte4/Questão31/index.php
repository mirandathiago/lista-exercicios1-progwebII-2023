<!--1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. 

-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto com um desconto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div id="container">
            <h1>Parte 4 (1) Questão 31:</h1>
            <p>Bem Você a caba de testar algumas dos códigos em php da parte 1. Agora, que tal aumentar o nível? Indique 3 números e eu lhe direi o maior e o menor:</p>
            <br>

            <form action="index.php" method="post">
                <label for="sabores">Escolha os sabores:</label>
                <label>Uva
                    <input type="checkbox" name="sabores[]" value="Uva">
                </label>
                <label>Banana
                    <input type="checkbox" name="sabores[]" value="Banana">
                </label>
                <label>Maçã
                    <input type="checkbox" name="sabores[]" value="Maçã">
                </label>
                <label>Abacaxi
                    <input type="checkbox" name="sabores[]" value="Abacaxi">
                </label>
                <label>Amora
                    <input type="checkbox" name="sabores[]" value="Amora">
                </label>

                <button class="btn-finish">Finish </button>
            </form>
        </div>
        <div id="container">
            <h1>Frutas:</h1>
            <?php
            echo $msg = "Defina as frutas..";
            //var_dump($sabores);
            $method = $_SERVER["REQUEST_METHOD"];
            if ($method == "POST") {
                $sabores = $_POST["sabores"] ?? [];
                foreach ($sabores as  $key => $sabor) {
                    echo "<li>  Fruta de Número {$key} : {$sabor}</li>";
                }
            }

            ?>
        <a href="../../Parte4/Questão32/index.php"><button class="next">Next Page</button></a>
        <a href="../../index.html"><button class="next">Página Inicial</button></a>
        </div>
    </main>
</body>

</html>