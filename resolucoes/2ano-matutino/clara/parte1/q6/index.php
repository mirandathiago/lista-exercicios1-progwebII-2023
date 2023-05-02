<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>questão 6</title>
</head>
<body>

<form action="index.php" method="post">
        <label>
        Largura:
        <input type="number" name="larg">
        </label>
        <label>
        Comprimento:
        <input type="number" name="comp">
        </label>
        <button>CALCULAR</button>
    <form>
    <?php
        $larg = $_POST["larg"] ?? 0;
        $comp = $_POST["comp"] ?? 0;

        
        $area = $larg * $comp;
       
    ?>

</h1> a área é <?=$area?>m²</h1>
</body>
</html>