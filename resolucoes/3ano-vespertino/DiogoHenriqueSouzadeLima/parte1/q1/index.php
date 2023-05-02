

<?php

/*1- Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
Entrada: Preço original: R$ 50,00
Saída: Preço com desconto: R$ 45,00*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precoOri = $_POST["precoOriginal"];
    $precoComDes = $precoOri - ($precoOri * 0.1);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calcular preço com desconto</title>
</head>
<body>
	<form method="POST">
	    <label for="precoOriginal">Preço original:</label>
	    <input type="number" id="precoOriginal" name="precoOriginal" step="0.01" required><br><br>
	    <button type="submit">Calcular preço com desconto</button>
	</form>
	<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
	    <p>Preço com desconto: R$<?= number_format($precoComDes, 2, ',', '.') ?></p>
	<?php endif; ?>
</body>