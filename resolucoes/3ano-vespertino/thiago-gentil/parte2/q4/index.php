<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];

  if ($a === '' || $b === '' || $c === '') {
    echo 'Por favor, preencha todos os campos.';
  } elseif (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
    echo 'Por favor, digite apenas números.';
  } else {
    $delta = ($b ** 2) - (4 * $a * $c);

    if ($delta < 0) {
      echo 'A equação não possui raízes reais.';
    } elseif ($delta === 0) {
      $x = -$b / (2 * $a);
      echo 'A equação possui uma única raiz real: x = ' . $x;
    } else {
      $x1 = (-$b + sqrt($delta)) / (2 * $a);
      $x2 = (-$b - sqrt($delta)) / (2 * $a);
      echo 'A equação possui duas raízes reais: x1 = ' . $x1 . ' e x2 = ' . $x2;
    }
  }
}
?>
<form method="POST">
  <label for="a">Valor de A:</label>
  <input type="number" id="a" name="a" required>
  <br>
  <label for="b">Valor de B:</label>
  <input type="number" id="b" name="b" required>
  <br>
  <label for="c">Valor de C:</label>
  <input type="number" id="c" name="c" required>
  <br>
  <button type="submit">Calcular</button>
</form>
