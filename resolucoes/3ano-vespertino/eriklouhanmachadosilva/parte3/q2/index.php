<?php
$numero = $_POST["numero"] ?? 2;
$i = 0;
$e = 10;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title>TABUADA</title>
</head>
<body>
    <header>
        <h1>Tabuada</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Tabuada dos Números</h2>
            <form action="index.php" method="post">
                
                <label>Número:
                        <input type="number" name="numero">
                </label>

                <button name="enviar"> Enviar </button>


            </form>

            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
                        while($i <= $e){
                            $resultado = $numero * $i;
                            echo"<p class='alerta-verde'> Tabuada de {$numero}.<br> {$numero} x {$i} = {$resultado}</p>";
                            $i++;
                        }

					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>