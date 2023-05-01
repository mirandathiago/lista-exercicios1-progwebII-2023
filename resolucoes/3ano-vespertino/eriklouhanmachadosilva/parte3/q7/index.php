<?php
$dinheiro = $_POST["numero"] ?? 100;
$cedulas = [100, 50, 20, 10, 5, 2, 1];
$size = count($cedulas);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title>CONTADOR</title>
</head>
<body>
    <header>
        <h1>CONTADOR</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Contador de cedulas</h2>
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
                        for($i = 0; $i < $size; $i++){
                            $q = intdiv($dinheiro, $cedulas[$i]);
                            echo "<p class='alerta-verde'>{$q} cédulas de {$cedulas[$i]}</p>";
                            $dinheiro = $dinheiro % $cedulas[$i];
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