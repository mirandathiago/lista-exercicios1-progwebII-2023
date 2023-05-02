<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body><h1>População...</h1>
	</header>
    <div class="container">
		<div class="box formulario">
        <form method="post">
    <label for="popA"><h3>População da cidade A:</h3></label>
    <input type="number" name="popA" id="popA" required>

    <label for="taxaA"><h3>Taxa de crescimento anual da cidade A (%):</h3></label>
    <input type="number" name="taxaA" id="taxaA" step="0.01" required>

    <label for="popB"><h3>População da cidade B:</h3></label>
    <input type="number" name="popB" id="popB" required>

    <label for="taxaB"><h3>Taxa de crescimento anual da cidade B (%):<h3></label>
    <input type="number" name="taxaB" id="taxaB" step="0.01" required>
    <br>
    <br>    
    <button name="enviar"> Enviar </button>
	</form>
</div>
    <div class="box resposta">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $popA = $_POST['popA'];
    $taxaA = $_POST['taxaA'] / 100; // Convertendo para valor decimal
    $popB = $_POST['popB'];
    $taxaB = $_POST['taxaB'] / 100; // Convertendo para valor decimal

    if ($popA >= $popB) {
        echo "A cidade A já tem mais habitantes do que a cidade B.";
    } elseif ($taxaA <= $taxaB) {
        echo "A cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.";
    } else {
        $anos = 0;
        while ($popA < $popB) {
            $popA *= (1 + $taxaA);
            $popB *= (1 + $taxaB);
            $anos++;
        }
        echo "<h3>Serão necessários $anos anos para que a população da cidade A ultrapasse a da cidade B.</h3><br>";
        echo "<h3>População da cidade A após $anos anos: </h3>" . round($popA) . "<br>";
        echo "<h3>População da cidade B após $anos anos: </h3>" . round($popB) . "<br>";
    }
}
?>
    </div>
    </div>
</body>
</html>