<?php
if (isset($_POST["sabor"])) {
    $sab = $_POST["sabor"]; // $sab = sabor 
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>


<div class="container">
        <div class="box formulario">
            <h2>Quais são os sabores de pizza que você vai escolher?</h2>
    <form action="index.php" method="post">
        <label for="sabores">Selecione os sabores escolhidos:</label><br>
        <input type="checkbox" name="sabor[]" value="Frango">Frango<br>
        <input type="checkbox" name="sabor[]" value="Romeu e Julieta">Romeu e Julieta<br>
        <input type="checkbox" name="sabor[]" value="Camarão">Camarão<br>
        <input type="checkbox" name="sabor[]" value="Moda da Casa">Moda da Casa<br>
        <input type="checkbox" name="sabor[]" value="Portuguesa">Portuguesa<br>
        <input type="checkbox" name="sabor[]" value="4 queijos">4 queijos<br>
        <input type="checkbox" name="sabor[]" value="Chocolate">Chocolate<br>
        <input type="checkbox" name="sabor[]" value="Atum">Atum<br>
        <br>
        <input type="submit" value="Enviar">
    </form>
        </div>
        <div class="box resposta">
        <h2>Esses foram os sabores de pizza escolhidos: </h2>
        <?php
        
        foreach ($sab as $sabores) {
        echo "<li>$sabores</li>";
    }
    ?>
        </div>
</div>
</body>
</html>