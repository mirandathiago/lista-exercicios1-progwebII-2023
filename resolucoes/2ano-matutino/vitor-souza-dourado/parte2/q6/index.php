<html>
  <head>
    <title>QUESTÃO 6 / PARTE 2</title>
  </head>
  <body>
  <h4> QUESTÃO 6/ PARTE 2 </h4> <br>
    <h2>Verificar tipo de triângulo</h2>
    <form method="post" action="index.php">
      <label for="lado1">Lado 1:</label>
      <input type="number" name="lado1" id="lado1" required><br><br>
      <label for="lado2">Lado 2:</label>
      <input type="number" name="lado2" id="lado2" required><br><br>
      <label for="lado3">Lado 3:</label>
      <input type="number" name="lado3" id="lado3" required><br><br>
      <input type="submit" value="Verificar">
    </form>
    
    <?php
      if($_POST){
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
        
        if($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1){
          echo "É possível formar um triângulo ";
          if($lado1 == $lado2 && $lado2 == $lado3){
            echo "equilátero.";
          }else if($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
            echo "isósceles.";
          }else{
            echo "escaleno.";
          }
        }else{
          echo "Não é possível formar um triângulo.";
        }
      }
    ?>
    
  </body>
</html>