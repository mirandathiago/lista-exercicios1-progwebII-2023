<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $sexo = $_POST["sexo"];

    switch($sexo){
        case "M":
            $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) -(5.7 * $idade);
            break;
        case "F":
            $tmb = 447.6 + (9.2 * $peso) + (3.1* $altura) -(4.3 * $idade);
    }

?>

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
        <h1>Formulário de Contato</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Entre em contato</h2>
            <form action="index.php" method="post">
                <label>Nome:
                    <input type="text" id="nome" name="nome" required>
                </label>

                <label>Idade em anos:
                    <input type="number" id="idade" name="idade" required>
                </label>

                <label>Peso em kg:
                    <input type="number" id="peso" name="peso" required>
                </label>

                <label>Altura em cm:
                    <input type="number" id="altura" name="altura" required>
                </label>

                <fieldset>
                    <legend>Sexo</legend>
                    <label>
                        <input type="radio" name="sexo" value="M">Masculino
                    </label>
                    <label>
                        <input type="radio" name="sexo" value="F">Feminino
                    </label>
                </fieldset>
                
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
                echo "<h2>{$nome} a sua taxa de metabolismo basal (TMB) é de aproximadamente {$tmb} calorias por dia</h2>";
            ?>
        </div>
    </div>
</body>
</html>
