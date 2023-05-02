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
        <h1>Local adequado de acordo com o clima do dia</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Climas:</h2>
            <form action="index.php" method="GET">

                <label>Selecione como está o clima:
                    <select name="climas">
                        <option></option>
                        <option value="Ensolarado">Ensolarado</option>
                        <option value="Ameno">Ameno</option>
                        <option value="Chuvoso">Chuvoso</option>
                        <option value="Nublado">Nublado</option>
                        <option value="Tempestuoso">Tempestuoso</option>
                    </select>
                </label>


                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>

            <?php
            $climas = $_GET['climas'];

            switch ($climas) {

                case "Ensolarado":
                    $lugar = "Clube";
                    break;

                case "Ameno":
                    $lugar = "Parque";
                    break;

                case "Chuvoso":
                    $lugar = "Cinema";
                    break;

                case "Nublado":
                    $lugar = "Museu";
                    break;

                case "Tempestuoso":
                    $lugar = "Lugar nenhum, o melhor é ficar em casa";
                    break;

				default:
					$lugar= "ERRO!";

            }

            echo "<p> Com o clima {$climas} o melhor lugar para você ir hoje é: {$lugar} </p>";

            ?>


            <a href="index.php" class="link">Voltar</a>
        </div>
    </div>
</body>

</html>