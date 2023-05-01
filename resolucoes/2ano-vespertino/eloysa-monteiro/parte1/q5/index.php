<!-- Um atleta de corrida de rua está treinando para uma maratona. Ele correu 10 km em 45 minutos no primeiro dia e quer aumentar sua velocidade para conseguir completar a maratona em menos de 4 horas. Crie um formulário que receba a distância que ele quer percorrer e o tempo que ele quer completar a prova e calcule a velocidade média que ele precisa atingir em km/h usando PHP. 
 -->
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
          <form action="receber1.php" method="POST" >
              <label> DISTÂNCIA PERCORRIDA:
                <input type="number" name="distancia"  requered>
              </label>

              <label> TEMPO:
                <input type="number" name="tempo"  requered>
              </label>
              <button> ENVIAR </button>

          </form>
      </div>       
  </body>  
</html>