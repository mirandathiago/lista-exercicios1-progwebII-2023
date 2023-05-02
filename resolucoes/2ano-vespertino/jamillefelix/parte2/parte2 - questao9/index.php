<?php
    $opcao = $_POST["opcao"] ?? "";
    switch($opcao){
        case "1":
            $r =  "<p>Com o clima ensolarado, recomendamos ir ao Clube</p>";
            break;
        case "2":
            $r = "<p>Com o clima ameno, recomendamos ir ao Parque</p>";
            break;
        case "3":
            $r = "<p>Com o clima chuvoso, recomendamos ir ao Cinema</p>";
            break;
        case "4":
            $r = "<p>Com o clima nublado, recomendamos ir ao Museu</p>";
            break;
        case "5":
            $r = "<p>Com o clima tempestuoso, recomendamos Ficar em Casa</p>";
            break;
            default;
            $r = "<p>erro</p>";
        }

?>

<!DOCTYPE html>
<html lang="pt-br">
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
                <label>Clima:
                    <select name="opcao">
                        <option></option>
                        <option value="1">Ensolarado</option>
                        <option value="2">Ameno</option>
                        <option value="3">Chuvoso</option>
                        <option value="4">Nublado</option>
                        <option value="5">Tempestuoso</option>
                    </select>
               </label>
               <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
            
                $metodo = $_SERVER["REQUEST_METHOD"];
                if($metodo == "POST"){
                    echo "<p>{$r}</p>";
                }

            ?>
            
        </div>
    </div>
</body>
</html>