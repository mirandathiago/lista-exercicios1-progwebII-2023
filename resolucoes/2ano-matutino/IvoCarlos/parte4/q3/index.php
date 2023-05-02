<?php
        $metodo = $_SERVER["REQUEST_METHOD"];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
<header>
    <h1>Questão 33 - PIZZARIA QUALIDADE e SABOR</h1>
</header>

<div class="container">
    <div class="box formulario">
        <h2>Escolha quais sabores de pizza deseja:</h2>
        <form action="index.php" method="post">
                <fieldset>
                        <legend>Sabores de pizza:</legend>
                        <div>
                        <input type="checkbox" id="calabresa" name="sabores[]" value="Calabresa">
                        <label for="calabresa">Calabresa</label>
                        </div>
                        <div>
                        <input type="checkbox" id="portuguesa" name="sabores[]" value="Portuguesa">
                        <label for="portuguesa">Portuguesa</label>
                        </div>
                        <div>
                        <input type="checkbox" id="fcc" name="sabores[]" value="Frango com catupiry">
                        <label for="fcc">Frango com catupiry</label>
                        </div>
                        <div>
                        <input type="checkbox" id="marguerita" name="sabores[]" value="Marguerita">
                        <label for="marguerita">Marguerita</label>
                        </div>
                        <div>
                        <input type="checkbox" id="mucarela" name="sabores[]" value="Muçarela">
                        <label for="mucarela">Muçarela</label>
                        </div>
                        <div>
                        <input type="checkbox" id="napolitana" name="sabores[]" value="Napolitana">
                        <label for="napolitana">Napolitana</label>
                        </div>
                        <div>
                        <input type="checkbox" id="qq" name="sabores[]" value="Quatro queijos">
                        <label for="qq">Quatro queijos</label>
                        </div>
			  </fieldset>
              <button name="enviar"> Enviar </button>
            </form>

    </div>
    
    <div class="box resposta">
        <h2>Sabores selecionados:</h2>
        <?php 
        if(isset($_POST["sabores"])) {
            $sabores = $_POST["sabores"];
            
            echo "<ul>";
            
            foreach($sabores as $sabor) {
                echo "<li> {$sabor} </li>";
            }
            
            echo "</ul>";
        }
        ?>
    </div>
</div>
</body>
</html>