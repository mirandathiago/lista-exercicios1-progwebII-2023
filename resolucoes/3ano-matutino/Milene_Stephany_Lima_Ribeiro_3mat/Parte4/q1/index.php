<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Frutas Favoritas</h1>
    </header>
    <div class="container">
        <div class="box Lista">
            
            <form action="index.php" method="get">
              <fieldset>
                <legend>Escolha suas frutas preferidas:</legend>
                <div>
                  <input type="checkbox" id="Kiwi" name="frutas[]" value="Kiwi">
                  <label for="Kiwi">Kiwi</label>
                </div>
                <div>
                  <input type="checkbox" id="morango" name="frutas[]" value="Morango">
                  <label for="morango">Morango</label>
                </div>
                <div>
                  <input type="checkbox" id="uva" name="frutas[]" value="Uva">
                  <label for="uva">Uva</label>
                </div>
                <div>
                  <input type="checkbox" id="Goiaba" name="frutas[]" value="Goiaba">
                  <label for="Goiaba">Goiaba</label>
                </div>
                <div>
                  <input type="checkbox" id="laranja" name="frutas[]" value="Laranja">
                  <label for="laranja">Laranja</label>
                </div>
                <div>
                  <input type="checkbox" id="maracuja" name="frutas[]" value="maracuja">
                  <label for="maracuja">Maracujá</label>
                </div>
                <div>
                  <input type="checkbox" id="melancia" name="frutas[]" value="Melancia">
                  <label for="melancia">Melancia</label>
                </div>
                <div>
                  <input type="checkbox" id="maca" name="frutas[]" value="Maçã">
                  <label for="maca">Maçã</label>
                </div>
              </fieldset>
                
                <button name="enviar"> Enviar </button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2>

            <?php

            $frutas = $_GET["frutas"] ?? [];

            foreach($frutas as $fruta){
                echo "<li>{$fruta}</li>";
            }

?>          
        </div>
    </div>
</body>
</html>