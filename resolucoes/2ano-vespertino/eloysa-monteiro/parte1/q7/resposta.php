<?php
    $tempcelcius = $_POST["celcius"] ?? 0;

    $convertor = ($tempcelcius*9)/5 + 32;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Aula - 14-07</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
      <div> 
            <h2> RESPOSTA </h2>
            <h3> A temperatura <?=$tempcelcius?>°C é <?=$convertor?>°F </h3>
      </div>   
     
  </body>  
</html>