<?php
    $distancia = $_POST["distancia"] ?? 0;
    $tempo = $_POST["tempo"] ?? 0;

?>
 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>JESUS FREAK</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
      <div id="corrida">
        <h1> VELOCIDADE MÉDIA </h1>
          <form action="exemplo1.php" method="POST" >
              <label> DISTÂNCIA PERCORRIDA:
                <input type="number" name="distancia" value=<?=$distancia?> requered>
              </label>

              <label> TEMPO:
                <input type="number" name="tempo" value="<?=$tempo?>" requered>
              </label>
              <button> ENVIAR </button>

          </form>
      </div>   
      <div class="resposta">
        <h2> RESPOSTA </h2>
        <?php
             $velocidadeMedia = $distancia / $tempo;

             echo "<p> A velocidade média que ele precisará atingir com a distância de {$distancia}km e o tempo de {$tempo}h é {$velocidadeMedia}km/h</p>";
        ?>
      </div>
    
  </body>  
</html>