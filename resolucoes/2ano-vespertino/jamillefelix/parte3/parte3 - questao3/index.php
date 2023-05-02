<?php
    $inicio = $_POST["inicio"] ?? 0;
    $fim = $_POST["fim"] ?? 0;

    for($quant = $inicio; $quant < $fim; $quant=+2){
        $quant = ($fim - $inicio) ;
        
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
                <label>Início do Intervalo:
                    <input type="number" id="inicio" name="inicio" required>
                </label>

                <label>Fim do Intervalo:
                    <input type="number" id="fim" name="fim" required>
                </label>

                

                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
            
                echo "<h2>Quantidade de números pares: {$quant}</h2>";
            ?>
        </div>
    </div>
</body>
</html>
