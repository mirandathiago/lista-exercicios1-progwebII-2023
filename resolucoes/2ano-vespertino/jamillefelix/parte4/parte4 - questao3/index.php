<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Pizzaria</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Pizzaria</h2>
            <form action="index.php" method="get">
                
               <fieldset>
                <legend>Selecione os sabores desejados:</legend>
                <div>
                  <input type="checkbox" id="calabresa" name="pizzas[]" value="calabresa">
                  <label for="calabresa">Calabresa</label>
                </div>
                <div>
                  <input type="checkbox" id="portuguesa" name="pizzas[]" value="portuguesa">
                  <label for="portuguesa">Portuguesa</label>
                </div>
                <div>
                  <input type="checkbox" id="baiana" name="pizzas[]" value="baiana">
                  <label for="baiana">Baiana</label>
                </div>
                <div>
                  <input type="checkbox" id="frango" name="pizzas[]" value="frango">
                  <label for="frango">Frango</label>
                </div>
                <div>
                  <input type="checkbox" id="mucarela" name="pizzas[]" value="mucarela">
                  <label for="mucarela">Muçarela</label>
                </div>
                <div>
                  <input type="checkbox" id="atum" name="pizzas[]" value="atum">
                  <label for="atum">Atum</label>
                </div>
                <div>
                  <input type="checkbox" id="quatroqueijos" name="pizzas[]" value="quatroqueijos">
                <label for="quatroqueijos">Quatro Queijos</label>
                </div>
                <div>
                  <input type="checkbox" id="caipira" name="pizzas[]" value="caipira">
                  <label for="caipira">Caipira</label>
                </div>
                <div>
                  <input type="checkbox" id="napolitana" name="pizzas[]" value="napolitana">
                  <label for="napolitana">Napolitana</label>
                </div>
                <div>
                  <input type="checkbox" id="marguerita" name="pizzas[]" value="marguerita">
                  <label for="marguerita">Marguerita</label>
                </div>
              </fieldset>

                
                <button name="enviar"> Enviar </button>

                <div class="box resposta">
            <?php
            
                $pizzas = $_GET["pizzas"] ?? [];

                foreach ($pizzas as $pizza){
                    echo "<h3>{$pizza}</h3>";
                }
            ?>
            
        </div>
            </form>
        </div>      
    </div>
</body>
</html>

