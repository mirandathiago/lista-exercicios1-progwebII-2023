3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
Exemplo de entrada:
Início do intervalo: 3
Fim do intervalo: 15
Exemplo de saída:
Quantidade de números pares: 6

<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora de Números Pares</title>
  </head>
  <body>
    <h1>Calculadora de Números Pares</h1>
    <form method="post">
      <label for="inicio">Digite o início do intervalo:</label>
      <input type="number" id="inicio" name="inicio"><br>

      <label for="fim">Digite o fim do intervalo:</label>
      <input type="number" id="fim" name="fim"><br>

      <button type="submit">Calcular Números Pares</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = $_POST["inicio"];
        $fim = $_POST["fim"];
        $quanti = 0;

        echo "<h2>Intervalo de $inicio a $fim:</h2>";
        for ($i = $inicio; $i <= $fim; $i++) {
          if ($i % 2 == 0) {
            $quanti++;
          }
        }
        echo "<p>Quantidade de números pares: $quanti</p>";
      }
    ?>
  </body>
</html>