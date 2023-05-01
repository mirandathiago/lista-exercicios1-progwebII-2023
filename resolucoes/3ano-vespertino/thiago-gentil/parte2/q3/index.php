<?php

// Me segue no github, Thiago

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $hora = date('H');

  if ($hora >= 5 && $hora < 12) {
    $saudacao = 'Bom dia';
  } elseif ($hora >= 12 && $hora < 18) {
    $saudacao = 'Boa tarde';
  } elseif ($hora >= 18 && $hora <= 23) {
    $saudacao = 'Boa noite';
  } else {
    $saudacao = 'Vá Dormir, está de Madrugada';
  }

  echo $saudacao . ', ' . $nome . '!';
}
?>
<form method="POST">
  <label for="nome">Digite seu nome:</label>
  <input type="text" id="nome" name="nome" required>
  <button type="submit">Enviar</button>
</form>
