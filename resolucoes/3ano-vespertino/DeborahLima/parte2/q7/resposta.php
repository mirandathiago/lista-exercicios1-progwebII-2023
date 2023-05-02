<?php
    $nome = $_POST["nome"] ?? "Fulana";
    $idade = $_POST["idade"] ?? 17;
    $peso = $_POST["peso"] ?? 70;
    $alt = $_POST["altura"] ?? 1.70;
    $gen = $_POST["genero"] ?? "F";

    switch ($gen) {
        case "F":
            $TMB = 447.6 + (9.2 * $peso) + (3.1 * $alt) - (4.3 * $idade);
			$cor = 'alerta-rosa';
            break;
        
        case "M":
            $TMB = 88.36 + (13.4 * $peso) + (4.8 * $alt) - (5.7 * $idade);
			$cor = 'alerta-verde';
            break;
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
        <h1>Taxa de Metabolismo Basal</h1>
    </header>
    <div class="container">
        <div class="box resposta">
            <h2>TMB</h2>
            <?php
                if($gen = "F"){  
					echo "<p class='$cor'>{$nome},<br>Sua taxa de metabolismo basal é de 
                    aproximadamente {$TMB} calorias</p>";
                }else{
                    echo "<p class='$cor'>{$nome}<br>Sua taxa de metabolismo basal é de 
                    aproximadamente {$TMB} caloria</p>";
                }
            ?>
            <a href="index.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>