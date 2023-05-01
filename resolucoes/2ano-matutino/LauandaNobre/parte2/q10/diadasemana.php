<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Dia da semana</title>
</head>
<body>
    <h1>Dia da semana</h1>
    <div class="container">
        <form action="diadasemana.php" method="get">
        <select name="diadasemana" >
            <option value="0" selected>Domingo</option>
            <option value="1">Segunda</option>
            <option value="2">Terça</option>
            <option value="3">Quarta</option>
            <option value="4">Quinta</option>
            <option value="5">Sexta</option>
            <option value="6">Sábado</option>
         </select>
         <button>Enviar</button>
        </form>
        <div class="resposta" style="display: block;">
        <h5 style="display: block;">Resultado:</h5>
            <?php
               $diadasemana = $_GET["diadasemana"] ?? 0;

               switch ($diadasemana) {
                case 0:
                    echo "Hoje é domingo, final de semana!!";
                    break;
                case 1:
                    echo "Hoje é segunda, dia util !!";
                    break;
                case 2:
                    echo "Hoje é terça, dia util !!";
                    break;
                case 3:
                    echo "Hoje é quarta, dia util !!";
                    break;
                case 4:
                    echo "Hoje é quinta, dia util !!";
                    break;
                case 5:
                    echo "Hoje é sexta, dia util !!";
                    break;
                case 6:
                    echo "Hoje é sábado, dia do descanso!!";
                    break;
                default:
                    echo "Selecione um dia válido!!";
                    break;
               }
            ?>
        </div>
    </div>
</body>
</html>