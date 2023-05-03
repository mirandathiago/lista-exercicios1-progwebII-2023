<?php
/*
3-Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. 
Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. 
Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach.
Certifique-se de que a lista seja clara e fácil de ler, 
para que o cliente possa verificar suas escolhas antes de fazer o pedido.

*/
if (isset($_POST['sabores'])) {
    $sabores = $_POST['sabores'];
    echo "<p>Você escolheu os seguintes sabores de pizza:</p>";
    echo "<ul>";
    foreach ($sabores as $sabor) {
        echo "<li>$sabor</li>";
    }
    echo "</ul>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ArtePizzaria </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>


<div class="container">
        <div class="box Lista">
            <h2>Escolha sabores de pizza:</h2>
    <form action="index.php" method="post">
        <label for="sabores">Selecione os sabores:</label><br>
        <input type="checkbox" name="sabores[]" value="Carne Seca">Carne Seca<br>
        <input type="checkbox" name="sabores[]" value="4 Queijos">4 Queijos<br>
        <input type="checkbox" name="sabores[]" value="Da casa">Da casa<br>
        <input type="checkbox" name="sabores[]" value="Calabresa">Calabrasa<br><br>
        <input type="submit" value="Enviar">
    </form>
        </div>
        <div class="box resposta">
        <h2>Resultado :</h2>
        </div>
</div>
</body>
</html>

 



