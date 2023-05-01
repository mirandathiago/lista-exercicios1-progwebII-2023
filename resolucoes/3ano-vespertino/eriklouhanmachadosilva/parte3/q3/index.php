<?php
    $num1 = $_POST["num1"] ?? 1;
    $num2 = $_POST["num2"] ?? 10;
    $par = 0;
    for($num1; $num1 < $num2; $num1++){
        if($num1 % 2 ==0){
            $par++;
        }
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


    <title>CONTADOR</title>
</head>
<body>
    <header>
        <h1>CONTADOR</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Números Pares Entre:</h2>
            <form action="index.php" method="post">
                
                <label>Número inicial:
                        <input type="number" name="num1">
                </label>
                <label>Número final:
                        <input type="number" name="num2">
                </label>

                <button name="enviar"> Enviar </button>


            </form>

            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
                        echo "<p class='alerta-verde'> Quantidade de números pares: {$par}</p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>