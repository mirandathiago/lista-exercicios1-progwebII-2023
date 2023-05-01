<?php 
$nomes = $_POST["nomes"] ?? " ";
$separador = explode("/n" , $nomes);
$qtd = count($separador);
 $sorteado = rand(0, $qtd -1);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title>Nomes</title>
</head>
<body>
    <header>
        <h1>Nomes</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Nomes</h2>
            <form action="index.php" method="post">
                
                <label>Digite os nomes:
                        <input type="text" name="nomes">
                </label>

                <button name="enviar"> Enviar </button>


            </form>

            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
                        echo "<p class='alerta-verde'> O nome sorteado foi: {$separador[$sorteado]} </p>";

					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>