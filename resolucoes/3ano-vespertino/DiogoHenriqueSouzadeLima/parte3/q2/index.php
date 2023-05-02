PARTE 3
2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora de Tabuada</title>
  </head>
  <body>
    <h1>Calculadora de Tabuada</h1>
    <form method="post">
      <label for="numero">Digite um número inteiro:</label>
      <input type="number" id="numero" name="numero"><br>

      <button type="submit">Calcular Tabuada</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["numero"];
        $i = 1;

        echo "<h2>Tabuada do número $num:</h2>";
        echo "<ul>";
        while ($i <= 10) {
          $resu = $num * $i;
          echo "<li>$num x $i = $resu</li>";
          $i++;
        }
        echo "</ul>";
      }
    ?>
  </body>
</html>