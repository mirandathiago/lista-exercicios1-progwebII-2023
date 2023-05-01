//Questão 7
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
        <h1>Temperatura em Fahrenheit</h1>
    </header>
    <div class="container">
        <div class="box formulario">
         
            <form action="formulario1.php" method="get">
                <label>Temperatura em Celsius:
                    <input type="number" name="celsius" required >
                </label>
               
               
                <button name="enviar"> Enviar </button>
            </form>
        </div>
       
        <div class="box resposta">
            <h2>Resposta</h2>
            <br>
           
<?php
$c = $_GET["celsius"] ?? 0;
$f= ($c * 9/5) + 32;
?>

<p class="alerta-verde"> A temperatura é de <?=$f?>°F </p>


            <a href="formulario1.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>
