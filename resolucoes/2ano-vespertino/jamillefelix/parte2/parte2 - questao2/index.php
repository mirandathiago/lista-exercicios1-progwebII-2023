<?php
    $consumo = $_POST["consumo"] ?? 0;

    if($consumo < 20){
        $conta = 20.00;
    }else if($consumo <= 100){
        $conta = $consumo * 0.50;
    }else if($consumo >= 101 || $consumo <= 200){
        $conta = $consumo * 0.70;
    }else{
        $conta = $consumo * 0.87;
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
                <label>Consumo de energia elétrica:
                    <input type="number" id="consumo" name="consumo" required>
                </label>

                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
            echo "Valor da conta de energia: {$conta}";
            ?>
        </div>
    </div>
</body>
</html>
