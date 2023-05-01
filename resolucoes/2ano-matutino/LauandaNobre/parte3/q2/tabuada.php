<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>
    <div class="container">
        <form action="tabuada.php" method="post">
            <label>
                Informe um número:
                <input type="number" name="numero" min="0">
            </label>
            <button>Enviar</button>
        </form>
        <div class="resposta" style="min-height:250px; width: 220px; background: #c7bcab; border: none;">
            <?php
               $numero = $_POST["numero"] ?? 0;
                    
               $i = 0;
               while($i <= 10){
                    $tabuada = $numero * $i;
                    echo "{$numero} X {$i} = {$tabuada}<br>";
                    $i++;
               }
            
            ?>
        </div>
    </div>
</body>
</html>