<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <title>Questão 2 Parte 4</title>
</head>

<body>
  <header>
    <h1>Nome Sorteado</h1>
  </header>
  <div class="container">
    <div class="box formulario">
      <h2>Insira os nomes para um ser sorteado</h2> <br>
      <form action="index.php" method="get">
        <div>
          <label for="nomes">Nomes: </label>
          <textarea id="nomes" name="nomes" value="<?=$nomes?>"></textarea>
        </div>
        <button>Enviar</button>
      </form>
    </div>

    <div class="box resposta">
      <h2>Resposta</h2><br>
      <?php
        $nomes = $_GET["nomes"] ?? "";
        $arrayNomes = explode("\n", $nomes);
        $sorteado = rand(0, count($arrayNomes) - 1);
        echo "<h2>{$arrayNomes[$sorteado]}</h2>";
      ?>
    </div>
  </div>
</body>

</html>