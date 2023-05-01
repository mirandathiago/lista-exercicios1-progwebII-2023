<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Clima do dia</title>
</head>
<body>
    <h1>Clima do dia</h1>
    <div class="container">
        <form action="clima.php" method="get">
            <select name="select" style="width:230px; height:30px; font-size: 1.2rem;" required>
                <option value="1" selected>Ensolarado</option>
                <option value="2">Ameno</option>
                <option value="3">Chuvoso</option>
                <option value="4">Nublado</option>
                <option value="5">Tempestuoso</option>
            </select>
            <button>Enviar</button>
        </form>
        <div class="resposta" style="display: block;">
        <h5>Resultado:</h5>
            <?php
                $escolha = $_GET["select"] ?? 0;

                switch ($escolha) {
                    case 1:
                        echo "Com o clima ensolarado, recomendamos ir ao clube";
                        break;
                    case 2:
                        echo "O clima Ameno é ótimo para ir ao parque";
                        break;
                    case 3:
                        echo "Aproveite o clima chuvoso para ir ao cinema";
                        break;
                    case 4:
                        echo "Se você gosta do clima nublado, vá ao museu!!";
                        break;
                    case 5:
                        echo "O clima tempestuoso é complicado, acho melhor você ficar em casa!!";
                        break;
                    default:
                       echo "Selecione um valor válido";
                     break;
                }
            ?>
        </div>
    </div>
</body>
</html>