//Questão 1
<?php
        $num1 = $_POST["n1"] ?? 0;
        $num2 = $_POST["n2"] ?? 0;
        $num3 = $_POST["n3"] ?? 0;
       
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
        <h1>Estruturas de repetição</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Informe os Números</h2>
            <form action="formulario.php" method="post">
                <label>Número 1:
                    <input type="number"  name="n1" required value="<?=$n1?>">
                </label>


                <label>Número 2:
                    <input type="number" name="n2" required value="<?=$n2?>">
                </label>


                <label>Número 3:
                    <input type="number"  name="n3" required value="<?=$n3?>">
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
       
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
                if($num1 < $num2 && $num1 < $num3){
                        echo "<p class='alerta-vermelho'> Menor número: {$num1} </p>";
                }else if($num2 < $num1 && $num2 < $num3){
                        echo "<p class='alerta-vermelho'> Menor número: {$num2} </p>";
                }else if($num3 < $num1 && $num3 < $num2){
                        echo "<p class='alerta-vermelho'> Menor número: {$num3} </p>";
                }
               
                if($num1 > $num2 && $num1 > $num3){
                    echo "<p class='alerta-verde'> Maior número: {$num1} </p>";
                }else if($num2 > $num1 && $num2 > $num3){
                    echo "<p class='alerta-verde'> Maior número: {$num2} </p>";
                }else if($num3 > $num1 && $num3 > $num2){
                    echo "<p class='alerta-verde'> Maior número: {$num3} </p>";
                }
            ?>
       
       
            <a href="formulario.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>
