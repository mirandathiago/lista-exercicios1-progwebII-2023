//Questão 5

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
        <h1>Velocidade Média</h1>
    </header>
    <div class="container">
        <div class="box formulario">
         
            <form action="formulario.php" method="get">
                <label>Distancia:
                    <input type="number" name="distancia" required >
                </label>
                <label>Tempo:
                    <input type="number" name="tempo" required >
                </label>
               
                <button name="enviar"> Enviar </button>
            </form>
        </div>
       
        <div class="box resposta">
            <h2>Resposta</h2>
            <br>
            <?php
$distancia = $_GET["distancia"] ?? 0;
$tempo= $_GET["tempo"] ?? 0;
$velocidade = $distancia / $tempo;

?>



<p class="alerta-verde"> A Velocidade média sera de <?=$velocidade?>km/h</p>

            <a href="formulario.php" class="link">Voltar</a>
        </div>
    </div>
</body>
</html>
