<?php 
    $kwh = $_POST["kwh"] ?? 0;


    if($kwh <= 100){
        $valor = $kwh * 0.50;
        if($valor > 20){
           $resposta = $valor + 20;
        }else{
           $resposta = 20;
        }
    }else if($kwh > 100 && $kwh <= 200){
        $valor = $kwh * 0.70;
        $resposta = $valor + 20;
    }else if($kwh > 200){
        $valor = $kwh * 0.87;
        $resposta = $valor + 20;
    }else{
        $resposta = "inválida!";    
    }
   




?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title> Calculadora de Energia</title>
</head>
<body>
    <header>
        <h1>Calculadora de Energia</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de consumo médio de energia</h2>
            <form action="index.php" method="post">
                
                <label>Consumo de energia elétrica em kWh:
                        <input type="number" name="kwh">
                </label>

                <button name="enviar"> Enviar </button>


            </form>



            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
						echo "<p class='alerta-verde'>Valor da conta de energia: {$resposta}</p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>