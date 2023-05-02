<?php
    $distancia = $_POST["distancia"] ?? 10;
    $consumo = $_POST["consumo"] ?? 10;

    $resultado = $distancia / $consumo;


?>











<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title> Calculadora de Gasolina</title>
</head>
<body>
    <header>
        <h1>Calculadora de Gasolina</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de consumo médio de gasolina</h2>
            <form action="index.php" method="post">
                
                <label>Distância a ser pecorrida em km:
                        <input type="number" step="0.01" name="distancia">
                </label>

                <label>Consumo médio de combustível:
                        <input type="number" step="0.01" name="consumo">
                </label>

               

                <button name="enviar"> Enviar </button>


            </form>



            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
						echo "<p class='alerta-verde'>Quantidade de combustível necessária: {$resultado} litros </p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>