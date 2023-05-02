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
        <h1>Calcular área de um terreno</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Preencha os seguintes campos: </h2>


            <form action="index.php" method="GET">
                <label>Altura:
                    <input type="number" name="altura" step="0.1" value="10">
                </label>

                <label>Largura:
                    <input type="number" name="largura" step="0.1" value="10">
                </label>

                <button name="enviar"> Enviar </button>
            </form>
        </div>


        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
            $altura = $_GET["altura"];
            $largura = $_GET["largura"];

            $area = $altura * $largura;

            echo "<p> O terreno de {$altura}m de altura e {$largura}m de largura tem {$area}m<sup>2</sup></p>";

            ?>

            <a href="index.php" class="link">Voltar</a>
        </div>
    </div>
</body>

</html>