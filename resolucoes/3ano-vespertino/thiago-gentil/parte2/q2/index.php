<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe o consumo de energia informado pelo usuário
  $consumo = $_POST['consumo'];

  // Verifica o valor a ser cobrado de acordo com a tabela de preços
  if ($consumo <= 100) {
    $valor = $consumo * 0.5;
  } elseif ($consumo <= 200) {
    $valor = 100 * 0.5 + ($consumo - 100) * 0.7;
  } else {
    $valor = 100 * 0.5 + 100 * 0.7 + ($consumo - 200) * 0.87;
  }

  // Verifica se o valor a ser cobrado é menor do que a taxa mínima
  if ($valor < 20) {
    $valor = 20;
  }

  // Mostra o valor da conta de energia na tela
  echo "Valor da conta de energia: R$ " . number_format($valor, 2, ',', '.');

  // Me segue no Github, Thiago
}
?>
<form method="POST">
  <label for="consumo">Consumo de energia (kWh):</label>
  <input type="number" id="consumo" name="consumo" required>
  <button type="submit">Calcular</button>
</form>