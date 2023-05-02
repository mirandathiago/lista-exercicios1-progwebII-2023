
<!DOCTYPE html>
<htm<l lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>questão 1</title>
</head>
<form action="index.php" method="POST">
        <label>
            número:
            <input type="text" name="num1">
            
            <button>Enviar</button>
        </label>
    </form>
    <?php
        $num1 = $_POST["num1"] ?? 0;

        
        $dob = $num1 * 2;
        $met = $num1 / 2;
    ?>

</body>
</h1> dobro: <?=$dob?> metade: <?=$met?> </h1> 
</body>
</html>


