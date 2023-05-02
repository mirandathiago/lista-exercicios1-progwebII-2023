<?php
if (isset($_POST["sabor"])) {
    $sabor = $_POST["sabor"];
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
            <h2>Quais sabores de pizza você deseja?</h2>
    <form action="index.php" method="post">
        <label for="sabores">Selecione os sabores:</label><br>
        <input type="checkbox" name="sabor[]" value="Calabresa">Calabresa<br>
        <input type="checkbox" name="sabor[]" value="4 Queijos">4 Queijos<br>
        <input type="checkbox" name="sabor[]" value="Carne Seca">Carne Seca<br>
        <input type="checkbox" name="sabor[]" value="Nordestina">Nordestina<br>
		<input type="checkbox" name="sabor[]" value="Bacon">Bacon<br>
		<input type="checkbox" name="sabor[]" value="Camarão">Camarão<br>
		<input type="checkbox" name="sabor[]" value="Frango">Frango<br>
		<input type="checkbox" name="sabor[]" value="Abacaxi">Abacaxi<br>
		<br>
        <input type="submit" value="Enviar">
    </form>
        </div>
        <div class="box resposta">
        <h2>Esses foram os sabores de pizza escolhidos por você:</h2>
		<?php
        
    	foreach ($sabor as $sabores) {
        echo "<li>$sabores</li>";
    }
	?>
        </div>
</div>
</body>
</html>

